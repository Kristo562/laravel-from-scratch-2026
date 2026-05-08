<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
        'title' => 'Home',
        'message' => 'Welcome to my Laravel application.',
        'links' => ['Laravel', 'PHP', 'GitHub']
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'message' => 'This is the about page.',
        'skills' => ['Routing', 'Views', 'Blade Layouts']
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Contact',
        'message' => 'This is the contact page.',
        'contacts' => ['Email', 'GitHub', 'Teams']
    ]);
});