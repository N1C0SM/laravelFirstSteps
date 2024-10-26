<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hola', function () {

    $datos = [
        "nombre" => "nico",
        "edad" => 19,
        "escalador" => true,
        "hobbies" => ['escalar', 'boxeo', 'programar', 'tocar el piano', 'ir al gimnasio'],
        "curso" => '2º DAW',
        "centro"=> 'UNENDO'
    ];
    


    return view('holamundo', $datos);
});
Route::get('/products', function(){
    $product = [
        "nombre" => 'Salchichas',
        "precio" => 13.99
    ];
    return view ('products', $product);
});

