<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibroController extends Controller
{
    private $libros = [["id"=>1,"titulo"=>"Don Quijote de la Mancha",
                    "autor"=>"Miguel de Cervantes Saavedra",
                    "disponible"=>true],
                    ["id"=>2,"titulo"=>"Cien años de Soledad",
                    "autor"=>"Gabriel García Marquez",
                    "disponible"=>false],
                    ["id"=>3,"titulo"=>"El Principito",
                    "autor"=>"Antoine DeSaint Exupéry",
                    "disponible"=>true]];

    public function index(){
        return view("inicio",["libros"=>$this->libros]);
    }

    //Otro metodo que retorne informacion de los autores 
    //al menos tres autores
    //Con los campos nombre, nacionalidad y fecha de nacimiento
}
