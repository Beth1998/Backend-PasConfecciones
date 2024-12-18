<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MisVisController extends Controller
{
    public function MisVis(){
        $getMisVis = MisVis::all();
        return view('sitioWeb/index.blade.php', compact('getMisVis'));
    }

    public function Edit($id){
        $editMisVis = MisVis::where('id', $id)->firstOrFail();
        return view('sitioWeb/index.blade.php', compact('editMisVis'));
    }

    public function Update(Request $request, $id){
        $updateMisVis = Informacion::findOrFail($id);
        $requestMisVis = $reques->all();
        $updateMisVis->Update($requestMisVis);
        return rediredt()->to('sitioWeb/index.blade.php');
    }

    public function EstadoMisVis($id){
        $estado = DB::select(DB::raw('SELECT mv.status FROM misvis mv WHERE mv.id = :id'),['id' => $id]);
        foreach ($estado as $item){
            if($item->status == 'DESACTIVATE'){
                DB::select(DB::raw('UPDATE misvis SET status ="ACTIVE" WHERE id = :id'), ['id' => $id]);
            }else if ($item->status == 'ACTIVE'){
                DB::select(DB::raw('UPDATE misvis SET status = "DESACTIVATE" WHERE id = :id'), ['id'=> $id]);
            }
        }
        return redirect()->back();
    }
}
