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
    return view('index');
});

Route::get('/user', function () {
    return view('user.home');
});

Route::get('/user/buat', function () {
    return view('user.create_thread');
});

Route::get('/user/thread', function () {
    return view('user.thread');
});

Route::get('/user/profile', function () {
    return view('user.profile');
});

Route::get('/admin', function () {
    return view('');
});