<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/about', function () {
    return "About Page (we will build later)";
});

Route::get('/contact', function () {
    return "Contact Page (we will build later)";
});

