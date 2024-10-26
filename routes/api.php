<?php

use App\Http\Controllers\prueba;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


Route::get('/hola', function () {
    //...
    //...
    //...
    //...
    //...
    //...
    return "hola";
});


Route::get('/products', function () {
    return 'Read products';
});

Route::post('/products', prueba::class . '@create');
Route::put('/products/{id}', prueba::class . '@update');

Route::delete('/products/{id}', function ($id) {
    return "Delete product with id: $id";
});


// Route::get('/saludo', prueba::class . '@saludo');


Route::get('/saludo/{nombre}', prueba::class . '@saludo');

Route::get('/buscar/{id}', [prueba::class, 'buscar']);
