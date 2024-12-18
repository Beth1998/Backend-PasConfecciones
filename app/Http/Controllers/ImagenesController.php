<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImagenesController extends Controller
{
    public function Imagenes(){
        $getImagenes = Imagenes::all();
        return view('sitioWeb/index.blade.php', compact('getImagenes'));
    }

    public function Edit($id){
        $editImagenes = Imagenes::where('id', $id)->firstOrFail();
        return view('sitioWeb/index.blade.php', compact('editImagenes'));
    }

    public function Update(Request $request, $id){
        $updateImg = Imagenes::findOrFail($id);
        $requestImg = $reques->all();
        $updateImg->Update($requestImg);
        return rediredt()->to('sitioWeb/index.blade.php');
    }

    public function EstadoImagenes($id){
        $estado = DB::select(DB::raw('SELECT i.status FROM imagenes i WHERE i.id = :id'),['id' => $id]);
        foreach ($estado as $item){
            if($item->status == 'DESACTIVATE'){
                DB::select(DB::raw('UPDATE imagenes SET status ="ACTIVE" WHERE id = :id'), ['id' => $id]);
            }else if ($item->status == 'ACTIVE'){
                DB::select(DB::raw('UPDATE imagenes SET status = "DESACTIVATE" WHERE id = :id'), ['id'=> $id]);
            }
        }
        return redirect()->back();
    }
}
