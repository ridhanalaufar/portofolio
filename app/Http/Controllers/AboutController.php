<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function __invoke()
    {
        $educations = json_decode(file_get_contents(resource_path('data/educations.json')), true);
        $careers = json_decode(file_get_contents(resource_path('data/careers.json')), true);

        // Kelompokkan karir berdasarkan perusahaan (untuk penanganan khusus)
        $groupedCareers = [];
        foreach ($careers as $career) {
            $company = $career['company'];
            if (!isset($groupedCareers[$company])) {
                $groupedCareers[$company] = [
                    'company' => $company,
                    'icon' => $career['icon'],
                    'positions' => []
                ];
            }
            $groupedCareers[$company]['positions'][] = $career;
        }

        // Konversi ke array untuk memudahkan penggunaan di view
        $groupedCareers = array_values($groupedCareers);

        return view('pages.about', compact('educations', 'groupedCareers'));
    }
}
