<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CancionesModel extends Model
{

    protected $table = 'tblcanciones';

    protected $fillable = [
        'titulo',
        'duracion',
        'idartista'
    ];

    public function artista(){
        return $this->belongsTo(ArtistaModel::class,'idartista');
    }

    public function generos(){
        return $this->belongsToMany(GenerosModel::class);
    }
}
