<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ModelCanciones;
use App\Models\ModelArtistas;

class CancionesController extends Controller
{
    public function index(){
        $canciones = ModelCanciones::with('artistas')->get();
        return view('index',compact('canciones'));
    }

    public function crear(){
        $artistas = ModelArtistas::all();
        return view('crear',compact('artistas'));
    }

    public function guardar(Request $request){
        ModelCanciones::create($request->all());
        return redirect()->route('index');

    }

    public function editar($id){
        $cancion = ModelCanciones::findOrFail($id);
        $artistas = ModelArtistas::all();
        return view('editar',compact('cancion','artistas'));
    }

    public function actualizar(Request $request, $id){
        $cancion = ModelCanciones::findOrFail($id);
        $cancion->titulo = $request->input('titulo');
        $cancion->duracion = $request->input('duracion');
        $cancion->fkartistas = $request->input('fkartistas');
        $cancion->save();
        return redirect()->route('index');
    }

    public function borrar($id){
        $cancion = ModelCanciones::findOrFail($id);
        $cancion->delete();
        return redirect()->route('index');
    }
}
