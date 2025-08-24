<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AchievementsController extends Controller
{
    public function __invoke(Request $request)
    {
        $achievements = json_decode(file_get_contents(resource_path('data/achievements.json')), true);

        // Normalisasi supaya semua punya "images" dan field yang diperlukan
        foreach ($achievements as &$a) {
            if (!isset($a['images'])) {
                $a['images'] = isset($a['image']) ? [$a['image']] : [];
            }
            // Set default values for new fields if they don't exist
            if (!isset($a['priority'])) {
                $a['priority'] = '1'; // Default priority
            }
            if (!isset($a['CredentialID'])) {
                $a['CredentialID'] = '';
            }
            if (!isset($a['CredentialURL'])) {
                $a['CredentialURL'] = '';
            }
        }

        // Get filter and sort parameters
        $sortBy = $request->get('sort', 'date'); // default sort by date
        $sortOrder = $request->get('order', 'desc'); // default descending
        $filterOrganizer = $request->get('organizer', ''); // filter by organizer

        // Apply organizer filter
        if ($filterOrganizer !== '' && $filterOrganizer !== 'all') {
            $achievements = array_filter($achievements, function ($achievement) use ($filterOrganizer) {
                return $achievement['organizer'] === $filterOrganizer;
            });
        }

        // Apply sorting
        usort($achievements, function ($a, $b) use ($sortBy, $sortOrder) {
            $valueA = $a[$sortBy] ?? '';
            $valueB = $b[$sortBy] ?? '';

            if ($sortBy === 'date') {
                // Handle date sorting - convert to timestamp for proper comparison
                $dateA = $this->parseDate($valueA);
                $dateB = $this->parseDate($valueB);
                $comparison = $dateA <=> $dateB;
            } else {
                // Handle title and other text fields
                $comparison = strcasecmp($valueA, $valueB);
            }

            return $sortOrder === 'desc' ? -$comparison : $comparison;
        });

        // Get unique organizers for filter options
        $allAchievements = json_decode(file_get_contents(resource_path('data/achievements.json')), true);
        $organizers = array_unique(array_column($allAchievements, 'organizer'));
        sort($organizers);

        return view('pages.achievements', compact('achievements', 'organizers'));
    }

    private function parseDate($dateString)
    {
        // Handle different date formats
        if (empty($dateString)) {
            return 0;
        }

        // Try to parse various date formats
        $formats = [
            'Y-m',     // 2025-05
            'Y-m-d',   // 2025-05-15
            'Y',       // 2025
            'd-m-Y',   // 15-05-2025
            'd/m/Y',   // 15/05/2025
        ];

        foreach ($formats as $format) {
            $date = \DateTime::createFromFormat($format, $dateString);
            if ($date !== false) {
                return $date->getTimestamp();
            }
        }

        // If no format matches, try strtotime
        $timestamp = strtotime($dateString);
        return $timestamp !== false ? $timestamp : 0;
    }
}
