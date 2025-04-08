<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LibrosModel extends Model
{
    protected $fillable = [
        "titulo",
        "id_autor"
    ];

    public function autores():BelongsTo{
        return $this->belongsTo(AutoresModel::class);
    }


}
