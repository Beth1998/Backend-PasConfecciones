<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\Models\Redes;
use Illuminate\Http\Request;

class RedesController extends Controller
{
    public function index(){
        $redes = Redes::where('status','activo')->get();
        return view('adminPC.redes.index', compact('redes'));
    }

    /**
     * create retorna la interfaz para crear una nueva red social
     */
    public function create(){
        return view('adminPC.redes.create');
    }
    /**
     * store crear una nueva red social 
     */

    public function store(Request $request){

        //dd( Red::create($request->all()));

        Redes::create($request->all());
        return redirect()->to('/redes');
    }
    /**
     * edit retorna una vista para editar una red social
     */

    public function edit($id){
        $edit = Redes::find($id);
        return view('adminPC.redes.edit', compact('edit'));
    }

    /**
     * update permite actualizar una red social
     */

    public function update(Request $request, Redes $red){
    
        //dd($request->id);
        $datos = $request->all();
        $red = Redes::find($datos['id']);
        $red->update($datos);
        return redirect()->to('/redes');

    }
    /**
     * status permite actualizar el estado de una red social
     */

    public function status($id){
        $estado = Redes::find($id);
        if($estado->status == 'activo'){
            
           Redes::where('id', $id)->update(['status'=> 'desactivo']);
        }else{
            Redes::where('id', $id)->update(['status'=> 'activo']);
        }
        return redirect()->to('/redes');

    }
    public function indexD(){
        $redes = Redes::where('status','desactivo')->get();
        return view('adminPC.redes.indexD', compact('redes'));
    }
}
