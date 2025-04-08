<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class tblautor extends Model
{
    protected $fillable =[
        "nombre",
        "nac",
        "fnac"
    ];

    public function libros():HasMany{
        return $this->hasMany(tbllibros::class,"autor_id");
    }
}
