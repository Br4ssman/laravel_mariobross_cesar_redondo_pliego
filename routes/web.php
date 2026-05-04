<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EntidadAController;
use App\Http\Controllers\EntidadBController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('entidades-a', EntidadAController::class);
Route::resource('entidades-b', EntidadBController::class);