<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
}) -> name("site.homepage");

Route::get('/about', [\App\Http\Controllers\AboutUsController::class,'aboutUs']) -> name("site.about");

Route::get('/contact', [\App\Http\Controllers\ContactController::class,'contact']) -> name("site.contact");

Route::get("/test", [\App\Http\Controllers\PrincipalController::class,"principal"]) -> name("site.test");

Route::get(
    '/test/{name?}/{category_id?}',
    function (
        string $name = "Unknown",
        int $category_id = 1){    
    echo "Test route $name - $category_id";
}) -> where("categoria_id", "[0-9]+") -> where("name", "[A-Za-z]+");

Route::prefix('/app') ->group(function () {
    Route::get("/customers", function () {return "Customers";}) -> name("app.customers");
    Route::get("/login", function () {return "Login";}) -> name("app.login");
    Route::get("/suppliers", function () {return "Suppliers";}) -> name("app.suppliers");
});

Route::fallback(function () {
    echo 'A rota acessada não existe! <a href="'.route('site.homepage').'"> clique aqui </a>
    para voltar a homepage';
});