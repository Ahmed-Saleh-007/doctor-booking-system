<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Config;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\AdminAuth;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\PatientController;
use App\Http\Controllers\Admin\SpecialistController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\DistrictController;
use App\Http\Controllers\Admin\DoctorDegreeController;
use App\Http\Controllers\Admin\DoctorController;
use App\Http\Controllers\Admin\SubSpecialistController;
use App\Http\Controllers\Admin\FeedbackController;
use App\Http\Controllers\Admin\DoctorAddressController;
use App\Http\Controllers\Admin\DoctorTimeController;
use App\Http\Controllers\Admin\StatisticsController;
use App\Http\Controllers\Doctor\DoctorSubSpecialistController;


Route::prefix('admin')->group(function () {
    Config::set('auth.defines', 'admin');

    //======================================Auth Routes=================================//
    Route::get('login', [AdminAuth::class, 'login'])->name('admin.login');
    Route::post('login', [AdminAuth::class, 'loginCheck'])->name('admin.loginCheck');
    Route::get('forgot/password', [AdminAuth::class, 'forgotPassword']);
    Route::post('forgot/password', [AdminAuth::class, 'forgotPasswordMessage']);
    Route::get('reset/password/{token}', [AdminAuth::class, 'resetPassword']);
    Route::post('reset/password/{token}', [AdminAuth::class, 'resetPasswordUpdateData']);
    //==================================================================================//

    Route::middleware(['admin:admin'])->group(function () {

        //============================================Admins crud routes=======================================//
        Route::resource('/admins', AdminController::class)->except(['create', 'update']);
        Route::post('/admins/{admin}/update', [AdminController::class, 'update'])->name('admins.update');
        Route::delete('/admins/destroy/all', [AdminController::class, 'destroyAll'])->name('admins.destroyAll');
        //=====================================================================================================//

        //===========================================Specialists Crud Routes==================================================//
        Route::resource('/specialists', SpecialistController::class)->except(['create', 'update']);
        Route::post('/specialists/{specialist}/update', [SpecialistController::class, 'update'])->name('specialists.update');
        Route::delete('/specialists/destroy/all', [SpecialistController::class, 'destroyAll'])->name('specialists.destroyAll');
        //====================================================================================================================//

        //============================================SubSpecialists Crud Routes========================================================//
        Route::resource('/sub-specialists', SubSpecialistController::class)->except(['create', 'update']);
        Route::post('/sub-specialists/{sub_specialist}/update', [SubSpecialistController::class, 'update'])->name('subspecialists.update');
        Route::delete('/sub-specialists/destroy/all', [SubSpecialistController::class, 'destroyAll'])->name('subspecialists.destroyAll');
        Route::get('/sub_specialists/get_subspecialists',[SubSpecialistController::class, 'get_subSpecialists']);
        //==============================================================================================================================//

        //================================================doctor-degree crud routes=================================================//
        Route::resource('/doctor-degree', DoctorDegreeController::class)->except(['create', 'update']);
        Route::post('/doctor-degree/{id}/update', [DoctorDegreeController::class, 'update'])->name('doctor-degree.update');
        Route::delete('/doctor-degree/destroy/all', [DoctorDegreeController::class, 'destroyAll'])->name('doctor-degree.destroyAll');
        //==========================================================================================================================//

        //================================================Countries Routes================================================//
        Route::resource('/countries', CountryController::class)->except(['create', 'update']);
        Route::post('/countries/{country}/update', [CountryController::class, 'update'])->name('countries.update');
        Route::delete('/countries/destroy/all', [CountryController::class, 'destroyAll'])->name('countries.destroyAll');
        // Get cities related to country
        Route::get('country/{country}/city_name', [CountryController::class, 'getCity']);
        //================================================================================================================//

        //====================================================Cities Routes===============================================//
        Route::get('/cities/get_cities', [CityController::class, 'get_cities'])->name('cities.get_cities');
        Route::resource('/cities', CityController::class)->except(['create', 'update']);
        Route::post('/cities/{city}/update', [CityController::class, 'update'])->name('cities.update');
        Route::delete('/cities/destroy/all', [CityController::class, 'destroyAll'])->name('cities.destroyAll');
        //================================================================================================================//

        //==============================Get Districts related to country==================================================//
        Route::get('city/{city}/district_name', [CityController::class, 'getDistrict']);
        //================================================================================================================//

        //=================================================Districts Routes===============================================//
        Route::resource('/districts', DistrictController::class)->except(['create', 'update']);
        Route::post('/districts/{district}/update', [DistrictController::class, 'update'])->name('districts.update');
        Route::delete('/districts/destroy/all', [DistrictController::class, 'destroyAll'])->name('districts.destroyAll');
        //================================================================================================================//

        //=================================================Doctor Time Routes===============================================//
        Route::resource('/doctor_times', DoctorTimeController::class)->except(['create', 'update']);
        Route::post('/doctor_times/{doctor_time}/update', [DoctorTimeController::class, 'update'])->name('doctor_times.update');
        Route::delete('/doctor_times/destroy/all', [DoctorTimeController::class, 'destroyAll'])->name('doctor_times.destroyAll');
        //================================================================================================================//

        //=================================================Book Routes===============================================//
        Route::resource('/books', BookController::class)->except(['create', 'update']);
        Route::post('/books/{book}/update', [BookController::class, 'update'])->name('books.update');
        Route::delete('/books/destroy/all', [BookController::class, 'destroyAll'])->name('books.destroyAll');
        // Get addresses related to specific doctor
        Route::get('/get_addresses', [BookController::class, 'get_addresses'])->name('books.get_addresses');
        //================================================================================================================//

        //=================================================Settings Routes===============================================//
        Route::get('settings', [SettingController::class, 'setting']);
        Route::post('settings', [SettingController::class, 'settingSave']);
        //================================================================================================================//

        //================================================Patients crud routes=================================================//
        Route::resource('patients', PatientController::class)->except(['create', 'update']);
        Route::post('/patients/{patient}/update', [PatientController::class, 'update'])->name('patients.update');
        Route::delete('/patients/destroy/all', [PatientController::class, 'destroyAll'])->name('patients.destroyAll');
        //==========================================================================================================================//

        //================================================Doctor Routes================================================//
        Route::resource('doctors', DoctorController::class)->except(['update']);
        Route::put('doctors/{doctor}/update', [DoctorController::class, 'update'])->name('doctors.update');
        Route::delete('doctors/destroy/all', [DoctorController::class, 'destroyAll'])->name('doctors.destroyAll');
        //=============================================================================================================//

        //================================================Doctor Feedback==============================================//
        Route::resource('feedbacks', FeedbackController::class)->except(['create']);
        Route::delete('feedbacks/destroy/all', [FeedbackController::class, 'destroyAll'])->name('feedbacks.destroyAll');
        //=============================================================================================================//

        //================================================doctor-addresses crud routes=================================================//
        Route::get('doctor-addresses/create/{doctor}', [DoctorAddressController::class,'create'])->name('addDoctorAddress');
        Route::post('doctor-addresses/create/{doctor}', [DoctorAddressController::class,'store'])->name('storeDoctorAddress');
        Route::get('doctor-addresses/edit/{address}', [DoctorAddressController::class,'edit'])->name('editDoctorAddress');
        Route::put('doctor-addresses/edit/{address}', [DoctorAddressController::class,'update'])->name('updateDoctorAddress');
        Route::delete('doctor-addresses/delete/{address}', [DoctorAddressController::class,'destroy'])->name('deleteDoctorAddress');
        //==========================================================================================================================//

        //================================================ Statistics Routes ====================================================================================//
        Route::get('statistics', [StatisticsController::class,'index'])->name('statistics');

        Route::get('statistics/doctor_specialist', [StatisticsController::class,'doctor_specialist'])->name('statistics.doctor_specialist');

        Route::get('statistics/doctor_revenue/{year}', [StatisticsController::class,'doctor_revenue'])->name('statistics.doctor_revenue');
        //==========================================================================================================================//

        //================================================ Doctor SubSpecialist=================================================================================//
        Route::get('doctors/{id}/sub-specialists/add', [DoctorSubSpecialistController::class,'createByAdmin'])->name('addDoctorSubSpecialist');
        Route::post('doctors/{id}/sub-specialists/add', [DoctorSubSpecialistController::class, 'storeByAdmin'])->name('storeDoctorSubSpecialist');
        Route::delete('doctors/{id}/sub-specialists/delete/{subspecialist}', [DoctorSubSpecialistController::class, 'destroyByAdmin'])->name('deleteDoctorSubSpecialist');
        Route::post('doctors/{id}/sub-specialists/delete/all', [DoctorSubspecialistController::class, 'destroyAllByAdmin'])->name('deleteAllSubSpecialists');
        //======================================================================================================================================================//

        Route::get('/', function () {
            return view('admin.dashboard');
        })->name('admin.dashboard');

        Route::get('logout', [AdminAuth::class, 'logout'])->name('admin.logout');
    });
});
