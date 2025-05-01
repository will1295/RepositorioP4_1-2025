<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelCanciones extends Model
{
    protected $table = 'tblcanciones';

    protected $fillable = [
        'titulo',
        'duracion',
        'fkartistas'
    ];

    public function artistas(){
        //belongsTo o belongsToMany
        return $this->belongsTo(ModelArtistas::class,'fkartistas');
    }

    public function generos(){
        return $this->belongsToMany(ModelGeneros::class);
    }

}
