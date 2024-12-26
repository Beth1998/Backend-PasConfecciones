<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\Models\MisVis;
use Illuminate\Http\Request;

class MisVisController extends Controller
{
    public function index(){
        return view('adminPC.MisVis.index');
    }

    public function create(){
        return view('adminPC.MisVis.create');
    }

    public function store(Request $request){

        $MisVis = $request->all(); //almacena los datos ingresados en el formulario

        //dd($MisVis, $MisVis['name']);

        if($image = $request->file('image')){
            $ruta = 'image/'; //ruta donde se va aguardar la imagen
            $nombreI = date('YmdHis').".".$image->getClientOriginalExtension(); //reenombra el archivo que subo
            $image->move($ruta, $nombreI); //Muevo el archivo a la carpeta donde quiero guardar
            $MisVis['image'] = "$nombreI"; //Guarda la imagen
        }

        //dd($nombreI);

        MisVis::create($MisVis);
        return redirect()->to('/MisVis');

        //dd($request);
        //LOGICA SIN IMAGEN O ARCHIVO
        /*MisVis::create($request->all()); //logica para guardar
        return redirect()->to('/MisVis'); //logica para retornar a la vista MisVis*/
    }

    
 
}
