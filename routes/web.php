<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ThreadController;
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

Route::controller(LoginController::class)->group(function () {
    Route::get('/', 'index')->name('/');
    Route::get('login', 'index')->name('login');
    Route::post('login/process', 'process')->name('login-process');
    Route::get('logout', 'logout')->name('logout');
});

Route::group(['middleware' => ['auth']], function () {

    Route::group(['middleware' => ['isLogin:1']], function () {
        Route::controller(AdminController::class)->group(function () {
            Route::get('admin', 'index');
        });
    });
    Route::group(['middleware' => ['isLogin:2']], function () {
        Route::controller(UserController::class)->group(function () {
            Route::get('moderator', 'index');
            Route::get('moderator/profile', 'profile');
        });
        Route::controller(ThreadController::class)->group(function () {
            Route::get('moderator/thread', 'index');
            Route::get('moderator/create-thread', 'create');
        });
    });
    Route::group(['middleware' => ['isLogin:3']], function () {
        Route::controller(UserController::class)->group(function () {
            Route::get('user', 'index');
            Route::get('user/profile', 'profile');
            Route::post('user/search-thread', 'search')->name("search-thread");
        });
        Route::controller(ThreadController::class)->group(function () {
            Route::get('user/thread', 'index');
            Route::get('user/create-thread', 'create');
            Route::post('user/insert-thread', 'insert')->name("insert-thread");
        });
    });
});

// Route::get('/admin', function () {
//     return view('admin.index');
// });

// Route::get('/user', function () {
//     return view('user.home');
// });

// Route::get('/user/buat', function () {
//     return view('user.create_thread');
// });

// Route::get('/user/thread', function () {
//     return view('user.thread');
// });

// Route::get('/user/profile', function () {
//     return view('user.profile');
// });
