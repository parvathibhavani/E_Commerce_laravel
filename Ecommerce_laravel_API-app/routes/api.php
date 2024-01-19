<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EcommerceController;
use App\Http\Controllers\ProductController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/ 

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {

    return $request->user();
});*/


//Route::get('first-api',[SampleApiController::class,'FirstAPI']);
Route::get('get_data/{id?}',[EcommerceController::class,'getdata']);

Route::post('add_data',[EcommerceController::class,'add_data']);

Route::put('update_data',[EcommerceController::class,'update_data']);

Route::delete('delete_data/{id}',[EcommerceController::class,'delete_data']);

Route::post('validate_data',[EcommerceController::class,'validate_data']);


//Route::apiResource('post',ProductController::class);

