<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Misvis extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'status',
    ];
    // Si el nombre de la tabla no sigue la convención, especifícalo aquí
    protected $table = 'misvis';
}

