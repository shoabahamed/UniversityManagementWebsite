<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/faqs', function () {
    return view('faqs');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/vc-message', function () {
    return view('vc-message');
});

Route::get('/faculties', function () {
    return view('faculties');
});





Route::get('/test', function () {
    return view('test');
});
