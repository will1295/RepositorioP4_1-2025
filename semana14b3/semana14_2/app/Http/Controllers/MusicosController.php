<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtistaModel;
use Illuminate\Support\Facades\Validator;

class MusicosController extends Controller
{
    public function index(){
        $musicos = ArtistaModel::all();
        return view('index',compact('musicos'));

    }

    public function crear(){
        return view('crear');

    }

    public function guardar(Request $request){
        $validacion = Validator::make($request->all(),[
            'nombre' => 'required|string|max:100',
            'nacionalidad' => 'required|string|max:100'
        ]);

        ArtistaModel::create($request->all());
        return redirect()->route('index');

    }

    public function editar($id){
        $artista = ArtistaModel::findOrFail($id);
        return view('editar', compact('artista'));
    }

    public function actualizar(Request $request, $id){
        $artista = ArtistaModel::findOrFail($id);
        $artista->nombre = $request->input('nombre');
        $artista->nacionalidad = $request->input('nacionalidad');
        //Si encuentra un registro lo actualiza pero sino lo crea
        $artista->save();
        return redirect()->route('index');

    }

    public function borrar($id){
        $artista = ArtistaModel::findOrFail($id);
        $artista->delete();
        return redirect()->route('index');

    }
}
