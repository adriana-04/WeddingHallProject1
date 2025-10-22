<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HallController;
use App\Http\Controllers\AuthController;



/*Route::get('/', function () {
    $username = session('username');
    $role = session('role');

    $halls = [];
    if ($role === 'admin') {
        $halls = \App\Models\Hall::with('user')->get();
    }

    return view('welcome', compact('username', 'halls'));
})->name('home');*/

Route::get('/', function () {
    $username = session('username');
    $role = session('role');
    return view('welcome', compact('username', 'role'));
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
    session()->flush();
    return redirect()->route('home');
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

Route::get('/register', [RegisterController::class, 'show'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.submit');

Route::get('/hall-register', [HallController::class, 'create'])->name('hall.register');
Route::post('/hall-register', [HallController::class, 'store'])->name('hall.register.submit');

// 
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');