<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/masuk', function () {
    return view('auth/signin');
});
Route::get('/daftar', function () {
    return view('auth/signup');
});
Route::get('/kirim-otp', function () {
    return view('auth/forget-password');
});
Route::get('/verifikasi-otp', function () {
    return view('auth/one-time-password');
});

Route::get('/katasandi-baru', function () {
    return view('auth/new-password');
});