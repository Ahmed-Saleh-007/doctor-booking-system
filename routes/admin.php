<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Config;
use App\Http\Controllers\Admin\AdminAuth;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\SpecialistController;
use App\Http\Controllers\SubSpecialistController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\DoctorDegreeController;

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
        Route::resource('/sub-specialists', SubSpecialistController::class)->except(['create', 'update']);
        
        //doctor-degree crud routes
        Route::resource('/doctor-degree', DoctorDegreeController::class)->except(['create', 'update']);
        Route::post('/doctor-degree/{id}/update', [DoctorDegreeController::class, 'update'])->name('doctor-degree.update');
        Route::delete('/doctor-degree/destroy/all', [DoctorDegreeController::class, 'destroyAll'])->name('doctor-degree.destroyAll');
        
        //=====================================Countries Routes=========================================================//
        Route::resource('/countries', CountryController::class)->except(['create', 'update']);
        Route::post('/countries/{country}/update', [CountryController::class, 'update'])->name('countries.update');
        Route::delete('/countries/destroy/all', [CountryController::class, 'destroyAll'])->name('countries.destroyAll');
        //==============================================================================================================//

        Route::get('/', function () {
            return view('admin.dashboard');
        })->name('admin.dashboard');

        Route::get('logout', [AdminAuth::class, 'logout'])->name('admin.logout');
    });
<<<<<<< HEAD
});
=======
});
>>>>>>> 76b3291b385d5218e263201e53df601dfa13123a
