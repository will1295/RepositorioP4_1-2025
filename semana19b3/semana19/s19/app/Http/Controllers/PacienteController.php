<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Paciente::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $paciente = Paciente::create($request->all());
        return response()->json($paciente,201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $paciente = Paciente::findOrFail($id);
        return response()->json($paciente,200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $paciente = Paciente::findOrFail($id);
         $info = $request->json()->all();
         $paciente->fill($info);
         $paciente->save();
         return response()->json([
            "mensaje"=>"Paciente actualizado correctamente",
            "paciente"=>$paciente
         ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $paciente = Paciente::findOrFail($id);
         $paciente->delete();
         return response()->json([
            "mensaje"=>"Producto eliminado correctamente"
         ],200);
    }
}
