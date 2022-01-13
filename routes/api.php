<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\SanctumController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Token Authentication of  API
Route::group(['middleware' => 'auth:sanctum'], function(){
    //All secure URL's
    // Make First API
    Route::get('apidata',[ApiController::class,'apiData']);
    // Get API
    Route::get('getapi',[ApiController::class,'getApi']);
    // Get API with Param
    Route::get('apiparam/{id?}',[ApiController::class,'apiParam']);
    Route::get('apiparamname/{key:name?}',[ApiController::class,'apiParamName']);
    // Post API Method
    Route::post('postapi',[ApiController::class,'postApi']);
    // Put API Method
    Route::put('putapi',[ApiController::class,'putApi']);
    // Delete API Method
    Route::delete('deleteapi/{id}',[ApiController::class,'deleteApi']);
    // Search API
    Route::get('searchapi/{name}',[ApiController::class,'searchApi']);
    // API Validate
    Route::post('apivalidation',[ApiController::class,'apiValidation']);
    // API with Resource
    Route::apiResource('device',ResourceController::class);

});

// API authentication with Sanctum
Route::post('login',[SanctumController::class,'index']);
// Upload file API
Route::post('fileapi',[ApiController::class,'fileApi']);