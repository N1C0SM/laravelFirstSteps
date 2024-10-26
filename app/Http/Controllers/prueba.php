<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class prueba extends Controller
{


    function pepito()
    {

        // $data = [
        //     'hola'=>"mundo"
        // ];
        $data = "holamundo";
        return $data;
    }



    function saludo($name)
    {
        return "hola $name";
    }





    function buscar($id)
    {

        $usuarios = ['rodri', 'nico', 'adri'];

        // $data = [
        //     [
        //         "id" => 1,
        //         "nombre" => "rodri",
        //         "edad" => 33,
        //     ],
        //     [
        //         "id" => 2,
        //         "nombre" => "nico",
        //         "edad" => 19,
        //     ],
        // ];
        return $usuarios[$id];
        // return array_filter($data, (fn($d) => $d['id'] == $id));
    }


    function create()
    {
        return "Create products";
    }
    function update($id)
    {
        return "Updating product with id: $id";
    }
}
