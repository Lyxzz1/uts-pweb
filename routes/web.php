<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Di sini Anda dapat mendaftarkan routes web untuk aplikasi Anda.
| Routes ini dimuat oleh RouteServiceProvider dan semuanya akan
| ditugaskan ke grup middleware "web".
|
*/


// Halaman Login
Route::get('/login', function () {
    return view('login');
});
Route::get('/', function () {
    return view('login');
});

// Halaman Register
Route::get('/register', function () {
    return view('register');
});

// Halaman Contact
Route::get('/contact', function () {
    return view('contact');
});
