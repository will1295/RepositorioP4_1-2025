<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Peliculas extends Model
{

    use HasFactory;

    protected $fillable = [
        'titulo',
        'duracionmin',
        'festreno'
    ];
}
