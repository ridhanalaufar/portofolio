<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class AchievementsController extends Controller
{
    public function __invoke(Request $request)
    {
        // Load achievements data
        $allAchievements = json_decode(file_get_contents(resource_path('data/achievements.json')), true);
        $achievements = $allAchievements;

        // Normalize data and add formatted date
        foreach ($achievements as &$achievement) {
            // Normalize images field
            if (!isset($achievement['images'])) {
                $achievement['images'] = isset($achievement['image']) ? [$achievement['image']] : [];
            }

            // Set default values for optional fields
            $achievement['CredentialID'] = $achievement['CredentialID'] ?? '';
            $achievement['CredentialURL'] = $achievement['CredentialURL'] ?? '';

            // Add formatted date for frontend display
            $achievement['formatted_date'] = $this->formatDate($achievement['date']);
        }

        // Get filter and sort parameters
        $sortBy = $request->get('sort', 'date');
        $sortOrder = $request->get('order', 'desc');
        $filterOrganizer = $request->get('organizer', '');

        // Apply organizer filter
        if (!empty($filterOrganizer) && $filterOrganizer !== 'all') {
            $achievements = array_filter($achievements, function ($achievement) use ($filterOrganizer) {
                return $achievement['organizer'] === $filterOrganizer;
            });
        }

        // Apply sorting
        usort($achievements, function ($a, $b) use ($sortBy, $sortOrder) {
            $valueA = $a[$sortBy] ?? '';
            $valueB = $b[$sortBy] ?? '';

            if ($sortBy === 'date') {
                // Convert dates to timestamps for proper comparison
                $timestampA = $this->parseDate($valueA);
                $timestampB = $this->parseDate($valueB);
                $comparison = $timestampA <=> $timestampB;
            } else {
                // Handle text fields
                $comparison = strcasecmp($valueA, $valueB);
            }

            return $sortOrder === 'desc' ? -$comparison : $comparison;
        });

        // Get unique organizers from ALL achievements for filter dropdown
        $organizers = array_unique(array_column($allAchievements, 'organizer'));
        sort($organizers);

        return view('pages.achievements', compact('achievements', 'organizers'));
    }

    /**
     * Parse date string into timestamp for sorting
     */
    private function parseDate($dateString)
    {
        if (empty($dateString)) {
            return 0;
        }

        // Handle Y-m format specifically (e.g., "2025-08")
        if (preg_match('/^\d{4}-\d{2}$/', $dateString)) {
            return Carbon::createFromFormat('Y-m', $dateString)->timestamp;
        }

        // Try other common formats
        try {
            return Carbon::parse($dateString)->timestamp;
        } catch (\Exception $e) {
            return 0;
        }
    }

    /**
     * Format date for display (e.g., "2025-08" becomes "August 2025")
     */
    private function formatDate($dateString)
    {
        if (empty($dateString)) {
            return '';
        }

        // Handle Y-m format specifically
        if (preg_match('/^\d{4}-\d{2}$/', $dateString)) {
            return Carbon::createFromFormat('Y-m', $dateString)->format('F Y');
        }

        // Try to parse other formats
        try {
            return Carbon::parse($dateString)->format('F Y');
        } catch (\Exception $e) {
            return $dateString; // Return original if parsing fails
        }
    }
}
