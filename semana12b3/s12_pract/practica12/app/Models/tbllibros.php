<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Datebase\Eloquent\Relations\BelongsTo;

class tbllibros extends Model
{
    protected $fillable = [
        "titulo",
        "autor_id"
    ];

    public function autor():BelongsTo{
        return $this->belongsTo(tblautor::class,"autor_id");
    }


}
