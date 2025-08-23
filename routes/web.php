<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AchievementsController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('app');
// });

// Home
Route::view('/', 'pages.index')->name('home');

// About
// Route::view('/about', 'pages.about')->name('about');
Route::get('/about', AboutController::class)->name('about');


// Achievement
// Route::view('/achievement', 'pages.achievement')->name('achievement');
Route::get('/achievements', AchievementsController::class)->name('achievements');

// Project
Route::view('/projects', 'pages.projects')->name('projects');

// Contact
Route::view('/contact', 'pages.contact')->name('contact');
