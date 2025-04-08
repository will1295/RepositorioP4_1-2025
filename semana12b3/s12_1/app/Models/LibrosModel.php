<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LibrosModel extends Model
{
    use HasFactory;

    protected $table = "tbl_libros";

    protected $fillable = [
        "titulo",
        "autor",
        "disponibilidad"
    ];

    protected $attributes = [
        "disponibilidad" => true
    ];
    
}
