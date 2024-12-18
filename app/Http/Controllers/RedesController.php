<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedesController extends Controller
{
    public function Redes(){
        $getRedes = Redes::all();
        return view('sitioWeb/index.blade.php', compact('getRedes'));
    }

    public function Edit($id){
        $editRedes = Redes::where('id', $id)->firstOrFail();
        return view('sitioWeb/index.blade.php', compact('editRedes'));
    }

    public function Update(Request $request, $id){
        $updateRedes = Redes::findOrFail($id);
        $requestRedes = $reques->all();
        $updateRedes->Update($requestRedes);
        return rediredt()->to('sitioWeb/index.blade.php');
    }

    public function EstadoRedes($id){
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
