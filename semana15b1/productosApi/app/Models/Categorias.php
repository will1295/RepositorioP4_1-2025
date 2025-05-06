<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    protected $fillable=[
        "nombre"
    ];

    public function productos(){
        return $this->hasMany(productos::class);
    }

}
