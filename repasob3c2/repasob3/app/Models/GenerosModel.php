<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GenerosModel extends Model
{
    protected $fillable = [
        'nombre'
    ];

    public function canciones(){
        return $this->belongsToMany(CancionesModel::class);
    }
}
