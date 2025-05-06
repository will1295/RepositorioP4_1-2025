<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Etiquetas extends Model
{
    protected $fillable =[
        "nombre"
    ];

    public function productos(){
        return $this->belongsToMany(productos::class);
    }
}
