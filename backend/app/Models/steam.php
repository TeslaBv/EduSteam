<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class steam extends Model
{
    use HasFactory;
    use HasFactory;
    protected $fillable =[
        'titulo',
    ];

    public function curso(){
        return $this->hasMany(curso::class);
    }
}
