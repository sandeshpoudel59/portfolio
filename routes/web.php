<?php

use App\Services\PersonDataService;
use Illuminate\Support\Facades\Route;

Route::get('/', function (PersonDataService $personDataService) {
    $personData = $personDataService->getData();

    return view('home', compact('personData'));
})->name('home');


Route::get('/about', function (PersonDataService $personDataService) {
    $personData = $personDataService->getData();

    return view('pages.about', compact('personData'));
})->name('about');


Route::get('/experience', function (PersonDataService $personDataService) {
    $personData = $personDataService->getData();

    return view('pages.experience', compact('personData'));
})->name('experience');


Route::get('/education', function (PersonDataService $personDataService) {
    $personData = $personDataService->getData();

    return view('pages.education', compact('personData'));
})->name('education');


Route::get('/skills', function (PersonDataService $personDataService) {
    $personData = $personDataService->getData();

    return view('pages.skills', compact('personData'));
})->name('skills');


Route::get('/projects', function (PersonDataService $personDataService) {
    $personData = $personDataService->getData();

    return view('pages.projects', compact('personData'));
})->name('projects');


// Route::get('/certifications', function (PersonDataService $personDataService) {
//     $personData = $personDataService->getData();

//     return view('pages.certifications', compact('personData'));
// })->name('certifications');


Route::get('/achievements', function (PersonDataService $personDataService) {
    $personData = $personDataService->getData();

    return view('pages.achievements', compact('personData'));
})->name('achievements');


Route::get('/services', function (PersonDataService $personDataService) {
    $personData = $personDataService->getData();

    return view('pages.services', compact('personData'));
})->name('services');


Route::get('/resume', function (PersonDataService $personDataService) {
    $personData = $personDataService->getData();

    return view('pages.resume', compact('personData'));
})->name('resume');


Route::get('/contact', function (PersonDataService $personDataService) {
    $personData = $personDataService->getData();

    return view('pages.contact', compact('personData'));
})->name('contact');