<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CancionesModel;

class CancionesController extends Controller
{
    public function crear(){
        $artista = CancionesModel::create([
            'nombre' => 'Waka waka',
            'duracion' => 150,
            'idartista'=>3
        ]);
    }
}
