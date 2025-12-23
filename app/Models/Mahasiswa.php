<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Mahasiswa extends Model
{
    protected $table = "mahasiswa";
    protected $guarded = [];

    public function prodi(): BelongsTo
    {
        return $this->belongsTo(Prodi::class);
    }
}
