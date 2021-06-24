<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Config;
use App\Http\Controllers\Doctor\DoctorAuth;
use App\Http\Controllers\Doctor\DoctorController;
use App\Http\Controllers\Doctor\DoctorSubSpecialistController;
use App\Http\Controllers\Doctor\DoctorAddressController;

Route::prefix('doctor')->group(function () {

    Config::set('auth.defines', 'doctor');

    //=======================================Doctor Routes=====================================//
    Route::get('register', [DoctorAuth::class, 'register'])->name('doctor.register');
    Route::post('register', [DoctorAuth::class, 'registerCheck'])->name('doctor.registerCheck');
    Route::get('login', [DoctorAuth::class, 'login'])->name('doctor.login');
    Route::post('login', [DoctorAuth::class, 'loginCheck'])->name('doctor.loginCheck');
    Route::get('forgot/password', [DoctorAuth::class, 'forgotPassword']);
    Route::post('forgot/password', [DoctorAuth::class, 'forgotPasswordMessage']);
    Route::get('reset/password/{token}', [DoctorAuth::class, 'resetPassword']);
    Route::post('reset/password/{token}', [DoctorAuth::class, 'resetPasswordUpdateData']);
    //=========================================================================================//

    Route::middleware(['doctor:doctor'])->group(function () {
    
        //=======================================Doctor Profile Routes=======================================//
        Route::get('profile', [DoctorController::class, 'show'])->name('doctor.profile');
        Route::get('profile/edit', [DoctorController::class, 'edit'])->name('doctor.editInfo');
        Route::put('profile/update/{doctor}', [DoctorController::class, 'update'])->name('doctor.updateInfo');
        //===================================================================================================//
        
        //=====================================================Doctor Address Routes============================================//
        Route::get('doctor-address/create/{doctor}', [DoctorAddressController::class, 'create'])->name('doctor.addDoctorAddress');
        Route::post('doctor-address/create/{doctor}', [DoctorAddressController::class, 'store'])->name('doctor.storeDoctorAddress');
        Route::get('doctor-address/edit/{address}', [DoctorAddressController::class,'edit'])->name('doctor.editDoctorAddress');
        Route::put('doctor-address/edit/{address}', [DoctorAddressController::class,'update'])->name('doctor.updateDoctorAddress');
        Route::delete('doctor-address/delete/{address}', [DoctorAddressController::class, 'destroy'])->name('doctor.deleteDoctorAddress');
        //=======================================================================================================================//
        
        //=================================================Doctor SubSpecialist Routes=========================================================================//
        Route::get('sub-specialists/add', [DoctorSubSpecialistController::class,'create'])->name('doctor.addDoctorSubSpecialist');
        Route::post('sub-specialists/add', [DoctorSubSpecialistController::class, 'store'])->name('doctor.storeDoctorSubSpecialist');
        Route::delete('sub-specialists/delete/{subspecialist}', [DoctorSubSpecialistController::class, 'destroy'])->name('doctor.deleteDoctorSubSpecialist');
        Route::post('sub-specialists/delete/all', [DoctorSubspecialistController::class, 'destroyAll'])->name('doctor.deleteAllSubSpecialists');
        //====================================================================================================================================================//
        
        Route::get('/', function () {
            return view('doctor.dashboard');
        })->name('doctor.dashboard');
        Route::get('logout', [DoctorAuth::class, 'logout'])->name('doctor.logout');
    });
});