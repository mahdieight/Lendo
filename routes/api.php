<?php

use App\Http\Controllers\Api\V1\Auth\AuthLoginController;
use App\Http\Controllers\Api\V1\Auth\AuthLogoutController;
use App\Http\Controllers\Api\V1\Auth\AuthRegisterController;
use Illuminate\Support\Facades\Route;


Route::group(["prefix" => "v1"], function () {
    Route::group(['prefix' => 'auth'], function () {
        Route::post('register', AuthRegisterController::class);
        Route::post('login', AuthLoginController::class);
        Route::get('logout', AuthLogoutController::class)->middleware('auth:sanctum');
    });
});
