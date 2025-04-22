<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CancionesModel extends Model
{
    protected $fillable = [
        'titulo',
        'duracion',
        'idartista'
    ];

    public function artista(){
        return $this->belongsTo(ArtistaModel::class);
    }

    public function generos(){
        return $this->belongsToMany(GenerosModel::class);
    }
}
