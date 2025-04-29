<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArtistaController extends Controller
{
    public function crear(){
        DB::insert('INSERT INTO tblartista(nombre,nacionalidad) VALUES (?,?)',[
            'Rocio Durcal',
            'España',
        ]);
        
    }
}
