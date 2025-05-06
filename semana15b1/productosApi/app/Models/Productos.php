<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    protected $fillable = [
        "nombre",
        "descripcion",
        "precio",
        "stock"
    ];

    public function categoria(){
        return $this->belongsTo(Categorias::class);
    }

    public function etiquetas(){
        return $this->belongsToMany(Etiquetas::class);
    }
}
