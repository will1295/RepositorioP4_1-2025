<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtistasModel;

class ArtistaController extends Controller
{
    public function crear(){
        $artista = ArtistasModel::create([
            'nombre' => 'Shakira',
            'nacionalidad' => 'Colombia'
        ]);
    }
}
