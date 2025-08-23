<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AchievementsController extends Controller
{
    public function __invoke()
    {
        $achievements = json_decode(file_get_contents(resource_path('data/achievements.json')), true);

        // Normalisasi supaya semua punya "images"
        foreach ($achievements as &$a) {
            if (!isset($a['images'])) {
                $a['images'] = isset($a['image']) ? [$a['image']] : [];
            }
        }

        return view('pages.achievements', compact('achievements'));
    }
}
