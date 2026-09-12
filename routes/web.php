<?php

use App\Services\PersonDataService;
use Illuminate\Support\Facades\Route;

Route::get('/', function (PersonDataService $personDataService) {

    $personData = $personDataService->getData();

    return view('home', compact('personData'));

})->name('home');