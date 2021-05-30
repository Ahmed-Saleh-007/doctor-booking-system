<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Config;
use App\Http\Controllers\Admin\AdminAuth;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\SpecialistController;
use App\Http\Controllers\SubSpecialistController;

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

        //Admins crud routes
        Route::resource('/admins', AdminController::class)->except(['create', 'update']);
        Route::post('/admins/{admin}/update', [AdminController::class, 'update'])->name('admins.update');
        Route::delete('/admins/destroy/all', [AdminController::class, 'destroyAll'])->name('admins.destroyAll');
        
        //Specialists Crud Routes
        Route::resource('/specialists', SpecialistController::class)->except(['create', 'update']);
        Route::post('/specialists/{special}/update', [SpecialistController::class, 'update'])->name('specialists.update');
        Route::delete('/specialists/destroy/all', [SpecialistController::class, 'destroyAll'])->name('specialists.destroyAll');
        
        //SubSpecialists Crud Routes
        Route::resource('/sub-specialists', SubSpecialistController::class)->except(['create', 'update']);
        Route::post('/sub-specialists/{special}/update', [SubSpecialistController::class, 'update'])->name('subspecialists.update');
        Route::delete('/sub-specialists/destroy/all', [SubSpecialistController::class, 'destroyAll'])->name('subspecialists.destroyAll');
        Route::resource('/sub-specialists', SubSpecialistController::class)->except(['create', 'update']);;
        
        Route::get('/', function () {
            return view('admin.dashboard');
        })->name('admin.dashboard');

        Route::get('logout', [AdminAuth::class, 'logout'])->name('admin.logout');
    });
});