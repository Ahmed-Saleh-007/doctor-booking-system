<?php

//use App\Http\Controllers\Admin\DoctorController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Config;
use App\Http\Controllers\Doctor\DoctorAuth;
use App\Http\Controllers\Doctor\DoctorController;

Route::prefix('doctor')->group(function () {

    Config::set('auth.defines', 'doctor');

    //=======================================Doctor Routes===============================//
    Route::get('signup', [DoctorAuth::class, 'signup'])->name('doctor.signup');
    //Route::post('signup', [DoctorController::class, 'store'])->name('doctor.create');
    Route::get('login', [DoctorAuth::class, 'login'])->name('doctor.login');
    Route::post('login', [DoctorAuth::class, 'loginCheck'])->name('doctor.loginCheck');
    Route::get('forgot/password', [DoctorAuth::class, 'forgotPassword']);
    Route::post('forgot/password', [DoctorAuth::class, 'forgotPasswordMessage']);
    Route::get('reset/password/{token}', [DoctorAuth::class, 'resetPassword']);
    Route::post('reset/password/{token}', [DoctorAuth::class, 'resetPasswordUpdateData']);
    //===================================================================================//

    //doctor profile routes
    Route::get('profile', [DoctorController::class, 'show'])->name('doctor.profile');
    Route::get('profile/edit', [DoctorController::class, 'edit'])->name('doctor.editInfo');
    Route::put('profile/update/{doctor}', [DoctorController::class, 'update'])->name('doctor.updateInfo');



    Route::middleware(['doctor:doctor'])->group(function () {
        Route::get('/', function () {
            return view('doctor.dashboard');
        })->name('doctor.dashboard');
        Route::get('logout', [DoctorAuth::class, 'logout'])->name('doctor.logout');
    });
});
