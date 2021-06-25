<?php

use App\Http\Controllers\API\Doctor\DoctorTimeController;
use App\Http\Controllers\API\City\CityController;
use App\Http\Controllers\API\District\DistrictController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\PasswordController;
use App\Http\Controllers\API\Doctor\DoctorController;
use App\Http\Controllers\API\Doctor\SpecialistController;
use App\Http\Controllers\API\Patient\BookController;
use App\Http\Controllers\API\Doctor\SupSpecialistController;

use App\Http\Controllers\API\Doctor\DoctorDegreeController;
use App\Http\Controllers\API\Patient\PatientAuthController;
use App\Http\Controllers\API\Patient\PatientProfileController;
use App\Http\Controllers\API\FeedbackController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });



Route::post('register', [PatientAuthController::class,'register']);
Route::post('login', [PatientAuthController::class,'login'])->name('login');
Route::get('login', [PatientAuthController::class,'getLogin']);
Route::post('forgot', [PasswordController::class,'forgot']);
Route::post('reset', [PasswordController::class,'reset']);
Route::get('doctors', [DoctorController::class,'index']);
Route::get('search', [DoctorController::class,'search']);
Route::get('filter', [DoctorController::class,'filter']);

Route::get('/specialists', [SpecialistController::class,'index']);
Route::get('/sub-specialist', [SupSpecialistController::class,'index']);


Route::get('/cities/{countryCode}', [CityController::class,'index']);
Route::get('doctors/{id}',[DoctorController::class,'show']);
Route::get('/districts/{cityID}', [DistrictController::class,'index']);
Route::get('/doctor-degree', [DoctorDegreeController::class,'index']);


##########################Feedback API##############################
Route::post('feedbacks', [FeedbackController::class,'store']);
Route::get('feedbacks/{id}', [FeedbackController::class,'index']);
Route::put('feedbacks', [FeedbackController::class,'update']);
####################################################################

##########################Doctor Time Table#####################
Route::get('available-time/{doc_id}/{address_id}', [DoctorTimeController::class,'index']);
################################################################
Route::post('book/store', [BookController::class, 'store']);



Route::put('update/{patient}', [PatientProfileController::class,'update']);

Route::get('/books', [BookController::class, 'index']);
Route::post('/books/test', [BookController::class, 'store']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('patientUser', [PatientAuthController::class,'patientUser']);
    Route::post('logout', [PatientAuthController::class,'logout']);
});
