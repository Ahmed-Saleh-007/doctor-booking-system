<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Config;
use App\Http\Controllers\Admin\AdminAuth;

Route::prefix('admin')->group(function () {

    Config::set('auth.defines', 'admin');

    //Auth Routes
    Route::get('login', [AdminAuth::class, 'login'])->name('admin.login');
    Route::post('login', [AdminAuth::class, 'loginCheck'])->name('admin.loginCheck');
    Route::get('forgot/password', [AdminAuth::class, 'forgotPassword']);
    Route::post('forgot/password', [AdminAuth::class, 'forgotPasswordMessage']);
    Route::get('reset/password/{token}', [AdminAuth::class, 'resetPassword']);
    Route::post('reset/password/{token}', [AdminAuth::class, 'resetPasswordUpdateData']);

    Route::middleware(['admin:admin'])->group(function () {
        Route::get('/', function () {
            return view('admin.dashboard');
        })->name('admin.dashboard');

        Route::get('logout', [AdminAuth::class, 'logout'])->name('admin.logout');

    });

    

});

