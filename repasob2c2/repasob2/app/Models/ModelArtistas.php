<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelArtistas extends Model
{
    protected $table = 'tblartista';

    protected $fillable = [
        'nombre',
        'nacionalidad'
    ];

    public function canciones(){
        //hasMany o hasOne
        return $this->hasMany(ModelCanciones::class);
    }

}
