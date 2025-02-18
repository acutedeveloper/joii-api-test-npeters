<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserRegistrationController;
use App\Http\Controllers\UserLoginController;
use App\Http\Controllers\DashboardController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('register', [UserRegistrationController::class,'register']);
Route::post('login', [UserLoginController::class,'login']);
Route::post('logout', [UserLoginController::class,'logout'])->middleware('auth:sanctum');

Route::post('dashboard',[DashboardController::class,'index'])->middleware('auth:sanctum');

