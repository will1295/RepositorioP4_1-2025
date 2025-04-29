<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CancionesController extends Controller
{
    public function crear(){
        DB::insert('INSERT INTO tblcanciones(titulo,duracion,fkartistas) VALUES (?,?,?)',[
            'La gata bajo la lluvia',
            '150',
            4
        ]);
    }
}
