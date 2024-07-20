<?php

use App\Http\Controllers\Api\V1\Auth\AuthLoginController;
use App\Http\Controllers\Api\V1\Auth\AuthRegisterController;
use App\Http\Controllers\Api\V1\Order\OrderStoreController;
use Illuminate\Support\Facades\Route;


Route::group(["prefix" => "v1"], function () {
    Route::group(['prefix' => 'auth'], function () {
        Route::post('register', AuthRegisterController::class);
        Route::post('login', AuthLoginController::class);
    });


    Route::group(['middleware' => 'auth:sanctum'], function () {
        Route::group(['prefix' => 'orders'], function () {
            Route::post('/', OrderStoreController::class)->name('orders.store');
        });
    });
});
