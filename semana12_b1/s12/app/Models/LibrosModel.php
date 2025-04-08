<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LibrosModel extends Model
{
    protected $table = "librostbl";

    protected $fillable = [
        "titulo",
        "autor",
        "disponibilidad"
    ];

    protected $attributes = [
        "disponibilidad" => true
    ];
}
