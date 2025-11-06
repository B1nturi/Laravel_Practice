<?php

use Illuminate\Support\Facades\Route;

// Get route example
Route::get('/', function () {
    return view('home');
});

// Contact route example
Route::get('/contact', function () {
    return view('contact');
});

// Parameters using route
Route::get('/portfolio/{firstname}/{lastname}', function ($firstname, $lastname) {
    // return view('portfolio');
    return "Welcome to my portfolio page. My name is " . $firstname . " " . $lastname . ".";
});

// Name route example
Route::get('/test', function () {
    return 'This is a test route.';
})->name('testpage');

// Group route example
Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::prefix('portfolio')->group(function () {
    Route::get('/company', function () {
        return view('company');
    });
    Route::get('/organization', function () {
        return view('organization');
    });
});
