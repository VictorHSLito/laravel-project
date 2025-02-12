<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', [\App\Http\Controllers\AboutUsController::class,'aboutUs']);

Route::get('/contact', [\App\Http\Controllers\ContactController::class,'contact']);

Route::get("/test", [\App\Http\Controllers\PrincipalController::class,"principal"]);

Route::get(
    '/test/{name?}/{category_id?}',
    function (
        string $name = "Unknown",
        int $category_id = 1){    
    echo "Test route $name - $category_id";
}) -> where("categoria_id", "[0-9]+") -> where("name", "[A-Za-z]+");