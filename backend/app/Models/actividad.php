<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class actividad extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombreActividad',
        'descriActividad',
        'archivo'
    ];

    public function subtema()
    {
        return $this->belongsTo(Subtema::class);
    }
}
