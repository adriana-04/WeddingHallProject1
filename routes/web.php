<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::get('/', function (Request $request) {
    $username = session('username'); // pull username if available
    return view('welcome', compact('username'));
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/register', function () {
    return view('register');
})->name('register');


Route::post('/register', function (Request $request) {
    // Save user info into session
    session([
        'username' => $request->username,
        'role' => $request->username === 'admin' ? 'admin' : 'user'
    ]);

    return redirect()->route('home');
})->name('register.submit');


Route::post('/logout', function () {
    session()->forget('username'); // clear username from session
    return redirect()->route('home'); // back to home
})->name('logout');




Route::get('/hall-register', function () {
    return view('hall_register');
})->name('hall.register');



Route::post('/hall-register', function (Request $request) {
    $halls = session('halls', []);

    $halls[] = [
        'hall_name' => $request->hall_name,
        'location' => $request->location,
        'user' => session('username')
    ];

    session(['halls' => $halls]);

    return redirect()->route('home')->with('success', 'Registration hall completed.');
})->name('hall.register.submit');

//safe zone