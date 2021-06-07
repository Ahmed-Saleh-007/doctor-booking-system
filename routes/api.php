<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\PasswordController;
use App\Http\Controllers\API\Patient\PatientAuthController;




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



Route::post('register',[PatientAuthController::class,'register']);
Route::post('login',[PatientAuthController::class,'login'])->name('login');
Route::get('login',[PatientAuthController::class,'getLogin']);
Route::post('forgot',[PasswordController::class,'forgot']);
Route::post('reset',[PasswordController::class,'reset']);


Route::middleware('auth:sanctum')->group(function() {

    Route::get('patientUser',[PatientAuthController::class,'patientUser']);
    Route::post('logout',[PatientAuthController::class,'logout']);
    
});