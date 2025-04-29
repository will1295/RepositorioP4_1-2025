<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GenerosModel;

class GeneroController extends Controller
{
    public function crear(){
        $artista = GenerosModel::create([
            'nombre' => 'jazz'
        ]);
    }
}
