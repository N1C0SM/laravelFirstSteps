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
        "hobbies" => ['escalar', 'boxeo', 'programar']
    ];


    return view('holamundo', $datos);
});
