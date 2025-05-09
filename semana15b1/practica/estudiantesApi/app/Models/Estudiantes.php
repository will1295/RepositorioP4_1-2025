<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estudiantes extends Model
{
    protected $fillable=[
        "codigo",
        "nombre",
        "carrera",
        "acursados",
        "edad"
    ];
}
