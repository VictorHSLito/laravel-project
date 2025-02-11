<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', [\App\Http\Controllers\AboutUsController::class,'aboutUs']);

Route::get('/contact', [\App\Http\Controllers\ContactController::class,'contact']);

Route::get("/teste", [\App\Http\Controllers\PrincipalController::class,"principal"]);