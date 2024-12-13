<?php

namespace App\Http\Controllers;
use App\Models\Inicio;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function inicio(){
        $getInicio = inicio::All();
        //dd($getInicio);//funcion para hacer una prueba de depuracion que me trae los datos de la base de datos
        return view('sitioWeb/index', compact('getInicio'));
    }
}
