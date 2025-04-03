<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibroController extends Controller
{
    /*
    public function index(){

        $libros = [["id"=>1,"titulo"=>"El Principito","autor"=>"Antonie de Saint",
                    "disponibilidad"=>true],
                ["id"=>2,"titulo"=>"Don Quijote de la Mancha","autor"=>"Miguel Cervantes",
            "disponibilidad"=>false],
                ["id"=>3,"titulo"=>"La Odisea","autor"=>"Homero","disponibilidad"=>true]];
        return view("index",["libros"=>$libros]);
    }*/

    private $libros = [["id"=>1,"titulo"=>"El Principito","autor"=>"Antonie de Saint",
                "disponibilidad"=>true],
            ["id"=>2,"titulo"=>"Don Quijote de la Mancha","autor"=>"Miguel Cervantes",
            "disponibilidad"=>false],
            ["id"=>3,"titulo"=>"La Odisea","autor"=>"Homero","disponibilidad"=>true]];


    public function index(){
       return view("index",["libros"=>$this->libros]);
    }

    //Hacer otro metodo que retorne valores de autores de libros
    //Utilizar los campos de nombre, nacionalidad y fecha de nacimiento
}
