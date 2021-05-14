<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Config;
use App\Http\Controllers\Admin\AdminAuth;

Route::prefix('admin')->group(function () {

    Config::set('auth.defines', 'admin');

    Route::get('login', [AdminAuth::class, 'login'])->name('admin.login');
    Route::post('login', [AdminAuth::class, 'loginCheck'])->name('admin.loginCheck');

    Route::middleware(['admin:admin'])->group(function () {
        Route::get('/', function () {
            return view('admin.dashboard');
        });
    });

    

});

