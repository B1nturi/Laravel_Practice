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
