<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function index(){
        $sucursal = "San Miguel";
        $clientes = ["Maria","Pedro","Juan"];
        return view("clientes.index",["listado"=>$clientes],
    ["info"=>$sucursal]);
    }
}
