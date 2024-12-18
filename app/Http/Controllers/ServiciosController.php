<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiciosController extends Controller
{
    public function Servicios(){
        $getServ = Servicios::all();
        return view('sitioWeb/index.blade.php', compact('getServicios'));
    }

    public function Edit($id){
        $editServ = Servicios::where('id', $id)->firstOrFail();
        return view('sitioWeb/index.blade.php', compact('editServicios'));
    }

    public function Update(Request $request, $id){
        $updateServ = Informacion::findOrFail($id);
        $requestServ = $reques->all();
        $updateServ ->Update($requestServ);
        return rediredt()->to('sitioWeb/index.blade.php');
    }

    public function EstadoServicios($id){
        $estado = DB::select(DB::raw('SELECT s.status FROM servicios s WHERE s.id = :id'),['id' => $id]);
        foreach ($estado as $item){
            if($item->status == 'DESACTIVATE'){
                DB::select(DB::raw('UPDATE servicios SET status ="ACTIVE" WHERE id = :id'), ['id' => $id]);
            }else if ($item->status == 'ACTIVE'){
                DB::select(DB::raw('UPDATE servicios SET status = "DESACTIVATE" WHERE id = :id'), ['id'=> $id]);
            }
        }
        return redirect()->back();
    }
}
