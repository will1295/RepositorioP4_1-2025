<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArtistasModel extends Model
{

    //Propiedad para indicar al modelo con claridad que tabla le corresponde
    protected $table = 'tblartistas';

    protected $fillable = [
        'nombre',
        'nacionalidad'
    ];

    public function canciones(){
        return $this->hasMany(CancionesModel::class);
    }
}
