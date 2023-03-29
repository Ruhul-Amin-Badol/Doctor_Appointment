<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\AppointmentController;
use App\Models\doctor;
use App\Models\department;
use App\Models\appointment;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    
    $data['doctor']=doctor::all();
    $data['department']=department::all();
    $data['appointment']=appointment::orderBy('id', 'DESC')->get();
    return view('home',$data);
});
Route::post('/', [AppointmentController::class,'store']);
Route::resource('doctor/', DoctorController::class);
Route::post('doctor/', [DoctorController::class,'create']);
Route::get('/edit/{id}', [DoctorController::class,'edit']);
Route::patch('/edit/{id}', [DoctorController::class,'update']);
Route::get('/doctor/{id}', [DoctorController::class,'destroy']);
