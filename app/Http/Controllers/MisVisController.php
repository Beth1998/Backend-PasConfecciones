<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Misvis;

class MisVisController extends Controller
{
    public function MisionVision(){
        $getMisVis = Misvis::all();
        return view('/home', compact('getMisVis'));
    }

    public function EditMV($id){
        $editMisVis = Misvis::where('id', $id)->firstOrFail();
        return view('editarMV', compact('editMisVis'));
    }

    public function UpdateMV(Request $request, $id){
        $updateMV = Misvis::findOrFail($id);
        $requestMV = $request->all();
        $updateMV->update($requestMV);
        return redirect()->to('/home');
    }

    public function EstadoMisVis($id){
        $estado = DB::select(DB::raw('SELECT r.status from redes r WHERE r.id = :id'), array('id'=>$id));

        foreach ($estado as $item) {
            if ($item->status == 'DEACTIVATE') {
                 DB::select(DB::raw('UPDATE redes set status ="ACTIVE" WHERE id  = :id'), array('id'=>$id));
             }else if ($item->status == 'ACTIVE') {
                 DB::select(DB::raw('UPDATE redes set status ="DEACTIVATE" WHERE id  = :id'), array('id'=>$id));
             }
         }
         return redirect()->back();
    } 
}
