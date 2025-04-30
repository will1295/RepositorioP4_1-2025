<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CancionesModel extends Model
{

    protected $table = 'tblcanciones';

    protected $fillable = [
        'nombre',
        'duracion',
        'idartista'
    ];

    public function artistas(){
        return $this->belongsTo(ArtistasModel::class,"idartista");
    }

    public function generos(){
        return $this->belongsToMany(GenerosModel::class);
    }
}
