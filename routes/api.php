<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\FetchDatatablesController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['prefix' => 'v1/mobile', 'as' => 'v1/mobile'], function () {
    Route::get('users', [FetchDatatablesController::class , 'usersFetch']);
    Route::post('login', [AuthController::class , 'login']);
    Route::post('register', [AuthController::class , 'register']);
});
