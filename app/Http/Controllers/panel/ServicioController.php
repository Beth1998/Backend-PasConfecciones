<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServicioController extends Controller
{
    public function index(){
        $servicios = Service::all();
        return view('admin.servicios.index', compact('servicios'));
    }

    public function create(){
        return view('admin.servicios.create');
    }

    public function store(Request $request){

        $servicio = $request->all();

        /**
         * permite cargar una imagen y la almacena en la carpeta publica
         * $nombreI almacene la direccion de la imagen
         */
        if($imagen = $request->file('image')){
            $ruta = 'imagen/';
            $nombreI = date('YmdHis').".".$imagen->getClientOriginalExtension();
            $imagen->move($ruta, $nombreI);
            $servicio['image'] = "$nombreI";
        }
        /**
         * $link guarda un link de ws, y concatenamos el numero y nombre del servicio
         */
        $link = 'https://wa.me/593'.$servicio['contact'].'?text=Buenas%20tardes,%20quiero%20informaci%C3%B3n%20sobre%20el%20servicio%20de%20'.$servicio['title'];

        $servicio['link'] = $link;
        Service::create($servicio);
        return redirect()->to('/servicios');
    }
}
