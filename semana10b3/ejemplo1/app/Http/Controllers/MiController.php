<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiController extends Controller
{
    public function index(){
        return view("home");
    }
}
