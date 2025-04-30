<?php

namespace App\Http\Controllers;
use App\Models\CancionesModel as Canciones;
use App\Models\ArtistaModel as Artistas;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class CancionesController extends Controller
{
    public function index(){
        $canciones = Canciones::with('artista')->get();
        return view('canciones.index',compact('canciones'));
    }

    public function crear(){
        $artistas = Artistas::all();
        return view('canciones.crear',compact('artistas'));

    }

    public function guardar(Request $request){
        $validacion = Validator::make($request->all(),[
            "titulo" => "required|string|max:150",
            "duracion" => "required|integer|min:1",
            "idartista" => "required"
        ]);

        Canciones::create($request->all());
        return redirect()->route('cindex');

    }

    public function editar($id){
        $cancion = Canciones::findOrFail($id);
        $artistas = Artistas::all();
        return view('canciones.editar',compact('cancion','artistas'));

    }

    public function actualizar(Request $request,$id){
        $cancion = Canciones::findOrFail($id);
        $cancion->titulo = $request->input('titulo');
        $cancion->duracion = $request->input('duracion');
        $cancion->idartista = $request->input('idartista');
        $cancion->save();
        return redirect()->route('cindex');
        
    }

    public function borrar($id){
        $cancion = Canciones::findOrFail($id);
        $cancion->delete();
        return redirect()->route('cindex');
        

    }
}
