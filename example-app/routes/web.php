<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// main page
Route::get('/', function () {
    return view('home');
});

// documents page
Route::get('/documents', function (){
    return view('documents');
});

// banking page
Route::get('/banking', function (){
    return view('banking');
});

// work page
Route::get('/work', function (){
    return view('work');
});

// accommodation page
Route::get('/accommodation', function (){
    return view('accommodation');
});

// commuting page
Route::get('/commuting', function (){
    return view('commuting');
});

// social page
Route::get('/social', function (){
    return view('social');
});

// food page
Route::get('/food', function (){
    return view('food');
});

// lifestyle page
Route::get('/lifestyle', function (){
    return view('lifestyle');
});

// contact page
Route::get('/contact', function () {
    return view('contact');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
