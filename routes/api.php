<?php

use App\Http\Controllers\CompraController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('/rol',RolController::class);
Route::apiResource('/user', UserController::class);
Route::apiResource('/producto', ProductoController::class);
Route::apiResource('/compra', CompraController::class);