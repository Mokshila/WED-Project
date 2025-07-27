<?php
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

Route::get('/',[DashboardController::class,'dashboard']);;

Route::get('/event',[EventController::class,'index']);
Route::get('/event/create',[EventController::class,'create']);
Route::post('/event/create',[EventController::class,'store']);
Route::get('event/{id}',[EventController::class,'show']);
Route::post('/event/update/',[EventController::class,'update']);
Route::get('event/delete/{id}',[EventController::class,'destroy']);

Route::get('/employee',[EmployeeController::class,'index2']);
Route::get('employee/create2',[EmployeeController::class,'create2']);
Route::post('/employee/create2',[EventController::class,'store']);
Route::get('employee/{id}',[EventController::class,'show']);
Route::post('/employee/update2/',[EventController::class,'update2']);
Route::get('employee/delete/{id}',[EventController::class,'destroy']);
