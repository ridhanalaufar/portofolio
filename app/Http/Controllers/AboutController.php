<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function __invoke()
    {
        $educations = json_decode(file_get_contents(resource_path('data/educations.json')), true);
        $careers = json_decode(file_get_contents(resource_path('data/careers.json')), true);

        return view('pages.about', compact('educations', 'careers'));
    }
}
