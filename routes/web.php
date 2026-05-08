<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
        'title' => 'Home',
        'message' => 'Welcome to my Laravel application.'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'message' => 'This is the about page.'
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Contact',
        'message' => 'This is the contact page.'
    ]);
});