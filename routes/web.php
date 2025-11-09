<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// Get route example
Route::get('/', function () {
    return view('home');
});

// Contact route example
Route::get('/contact', function () {
    return view('contact');
});

// Name route example
Route::get('/test', function () {
    return 'This is a test route.';
})->name('testpage');

// Group route example
Route::prefix('portfolio')->group(function () {
    Route::get('/', function () {
        return view('portfolio');
    });
    Route::get('/{firstname}/{lastname}', function ($firstname, $lastname) {
        // return view('portfolio');
        return "Welcome to my portfolio page. My name is " . $firstname . " " . $lastname . ".";
    });
    Route::get('/company', function () {
        return view('company');
    });
    Route::get('/organization', function () {
        return view('organization');
    });
});

// Post route example
Route::post('/submit-form', function (Request $request) {
    // Handle form submission logic here
    $request->validate([
        'fullname' => 'required|string|max:255',
        'email' => 'required|email|max:255',
    ]);

    $fullname = $request->input('fullname');
    $email = $request->input('email');
    return "Full Name: $fullname, Email: $email";
})->name('form.submit');
