<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Informaciones;
use App\Models\Misvis;
use App\Models\Servicios;
use App\Models\Redes;
use App\Models\Imagenes;
use App\Models\Categorias;

class PaginaController extends Controller
{
    public function index()
{
    $Mision = MisVis::where('status', 'ACTIVE')->where('id', 1)->first();
    $Vision = MisVis::where('status', 'ACTIVE')->where('id', 2)->first();

    // Depuración para verificar que se están obteniendo los datos
    //dd($Mision, $Vision);

    return view('layouts.index', compact('Mision', 'Vision'));
}

    public function paneldecontrol(){
        return view('layouts/admin');
    }

    public function productos(){
        $getInformaciones = Informaciones::all();
        $getMisvis = Misvis::all();
        $getServicios = Servicios::all();
        $getRedes = Redes::all();
        $getImagenes = Imagenes::all();
        $getCategorias = Categorias::all();
        
        return view('SitioWeb/productos', compact(
            'getInformaciones',
            'getImagenes',
            'getMisvis',
            'getServicios',
            'getRedes',
            'getCategorias'
        ));
    }

    public function blusas(){
        $getInformaciones = Informaciones::all();
        $getMisvis = Misvis::all();
        $getServicios = Servicios::all();
        $getRedes = Redes::all();
        $getImagenes = Imagenes::all();
        $getCategorias = Categorias::all();
        
        return view('SitioWeb/blusas', compact(
            'getInformaciones',
            'getImagenes',
            'getMisvis',
            'getServicios',
            'getRedes',
            'getCategorias'
        ));
    }
}
