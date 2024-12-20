<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformacionController extends Controller
{
    public function Informacion(){
        $getInformacion = Informacion::all();
        return view('sitioWeb/index', compact('getInformacion'));
    }

    public function Edit($id){
        $editInformacion = Informacion::where('id', $id)->firstOrFail();
        return view('sitioWeb/index.blade.php', compact('editInformacion'));
    }

    public function Update(Request $request, $id){
        $updateInfo = Informacion::findOrFail($id);
        $requestInfo = $reques->all();
        $updateInfo->Update($requestInfo);
        return rediredt()->to('sitioWeb/index.blade.php');
    }

    public function EstadoInformacion($id){
        $estado = DB::select(DB::raw('SELECT i.status FROM informacion i WHERE i.id = :id'),['id' => $id]);
        foreach ($estado as $item){
            if($item->status == 'DESACTIVATE'){
                DB::select(DB::raw('UPDATE informacion SET status ="ACTIVE" WHERE id = :id'), ['id' => $id]);
            }else if ($item->status == 'ACTIVE'){
                DB::select(DB::raw('UPDATE informacion SET status = "DESACTIVATE" WHERE id = :id'), ['id'=> $id]);
            }
        }
        return redirect()->back();
    }
}
