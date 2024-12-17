<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    use HasFactory;
    protected $fillable = [ //protected protege la informacion del cliente
        'logo', 'correo', 'telefono', 'direccion'
    ];
}
