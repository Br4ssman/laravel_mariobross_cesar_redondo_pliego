<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EntidadAController;
use App\Http\Controllers\EntidadBController;

Route::apiResource('entidad-a', EntidadAController::class);
Route::apiResource('entidad-b', EntidadBController::class);