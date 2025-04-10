<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LibroModel extends Model
{
    protected $fillable = [
        "titulo",
        "autor",
        "dispon"
    ];

    protected $attributes = [
        "dispon"=>true
    ];


}
