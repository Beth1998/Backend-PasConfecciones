<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MisVis extends Model
{
    protected $table = 'misvis'; // Asegúrate de que coincide con el nombre de la tabla
    protected $fillable = ['name', 'image', 'status']; // Define las columnas relevantes
}

