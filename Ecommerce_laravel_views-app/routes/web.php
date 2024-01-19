<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/use App\Http\Controllers\SampleApiController;

Route::get('Getdata/{id?}',[SampleApiController::class,'Getdata']);

Route::post('Adddata',[SampleApiController::class,'Adddata']);

Route::put('Updatedata',[SampleApiController::class,'Updatedata']);

Route::delete('Deletedata/{id}',[SampleApiController::class,'Deletedata']);

Route::post('Validatedata',[SampleApiController::class,'Validatedata']);