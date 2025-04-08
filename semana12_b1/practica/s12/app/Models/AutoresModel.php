<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\hasMany;

class AutoresModel extends Model
{
    protected $fillable = [
        "nombre",
        "nacionalid",
        "fechanac"
    ];

    public function libros(){
        return $this->hasMany(LibrosModel::class);
    }

}
