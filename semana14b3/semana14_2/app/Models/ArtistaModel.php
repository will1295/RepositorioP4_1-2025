<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArtistaModel extends Model
{

    protected $table = 'tblartistas';

    protected $fillable = [
        'nombre',
        'nacionalidad'
    ];

    public function canciones(){
        return $this->hasMany(CancionesModel::class);
    }
}

