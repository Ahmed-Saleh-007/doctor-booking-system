<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Config;
use App\Http\Controllers\Admin\AdminAuth;
use App\Http\Controllers\Admin\AdminController;


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

        Route::get('/admins',  [AdminController::class, 'index'])->name('admin.admins.index');
        Route::get('/admins/{admin}', [AdminController::class, 'show'])->name('admin.admins.show');
        Route::post('/admins', [AdminController::class, 'store'])->name('admin.admins.store');
        Route::get('/admins/{admin}/edit', [AdminController::class, 'edit'])->name('admin.admins.edit');
        Route::post('/admins/{admin}/update', [AdminController::class, 'update'])->name('admin.admins.update');
        Route::delete('/admins/{admin}', [AdminController::class, 'destroy'])->name('admin.admins.destroy');
        Route::delete('/admins/destroy/all', [AdminController::class, 'destroyAll'])->name('admin.admins.destroyAll');

        Route::get('/', function () {
            return view('admin.dashboard');
        })->name('admin.dashboard');

        Route::get('logout', [AdminAuth::class, 'logout'])->name('admin.logout');

    });

    

});

