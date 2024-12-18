<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function Categoria(){ //MOSTRAR TODA LA LISTA-INFORMACION
        $getCategoria = Categoria::all();
        return view('sitioWeb/index.blade.php', compact('getCategoria'));
    }

    public function Edit($id){ //MOSTRAR VISTA DE EDITAR
        //dd($id);
        $editCategoria = Categoria::where('id', $id)->firstOrFail();
       //dd($editCliente);
        return view('sitioWeb/index.blade.php', compact('editCategoria'));
    }

    public function Update(Request $request, $id){ //ACTUALIZAR DATOS
        //dd($id,$request->nombre, $request->apellido);
        $updateCat = Cliente::findOrFail($id);
        $requestCat = $request->all();
        $updateCat->update($requestCat);
        return redirect()->to('sitioWeb/index.blade.php');
    }

    public function EstadoCategorias($id){ //ESTADO
        $estado = DB::select(DB::raw('SELECT c.status FROM categorias c WHERE c.id = :id'), ['id' => $id]);
        foreach ($estado as $item) {
            if ($item->status == 'DESACTIVATE') {
                DB::select(DB::raw('UPDATE categorias SET status = "ACTIVE" WHERE id = :id'), ['id' => $id]);
            } else if ($item->status == 'ACTIVE') {
                DB::select(DB::raw('UPDATE categorias SET status = "DESACTIVATE" WHERE id = :id'), ['id' => $id]);
            }
        }
        return redirect()->back();
    }      

}