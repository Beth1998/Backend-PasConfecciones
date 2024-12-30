<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\Models\MisVis;
use Illuminate\Http\Request;

class MisVisController extends Controller
{
    public function index(){
        // Solo traer los elementos cuyo estado es 'ACTIVE'
    $items = MisVis::where('status', 'ACTIVE')->get();

    return view('adminPC.MisVis.index', compact('items'));
    }

    public function create(){
        return view('adminPC.MisVis.create');
    }


    public function store(Request $request){
        // Validación de los datos
        $request->validate([
            'name' => 'required|string|max:8000',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:8000', // Validar la imagen
        ]);

        // Almacenar los datos del formulario
        $MisVis = $request->all();

        // Procesar la imagen, si es que se sube
        if ($image = $request->file('image')) {
            $ruta = 'image/'; // La carpeta donde se guardará la imagen
            $nombreI = date('YmdHis') . "." . $image->getClientOriginalExtension(); // Nombre único para la imagen
            $image->move($ruta, $nombreI); // Mover la imagen a la carpeta
            $MisVis['image'] = $nombreI; // Guardar el nombre de la imagen
        }

        // Guardar los datos en la base de datos
        MisVis::create($MisVis);

        // Redirigir después de guardar
        return redirect()->route('MisVis.index')->with('success', 'Misión y Visión guardadas correctamente!');
    }



    public function edit($id){
        $MisVis = MisVis::find($id);  // Buscar el registro por ID
        return view('adminPC.MisVis.edit', compact('MisVis'));  // Pasar el registro a la vista
    }

    public function update(Request $request, $id){
        // Encuentra el registro por ID
        $MisVis = Misvis::find($id);

        // Valida los datos
        $request->validate([
            'name' => 'required|string|max:8000',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:8000',
        ]);

        // Si se selecciona una nueva imagen, actualízala
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('image'), $imageName);

            // Elimina la imagen anterior si existe
            if ($MisVis->image && file_exists(public_path('image/'.$MisVis->image))) {
                unlink(public_path('image/'.$MisVis->image));
            }

            // Asigna la nueva imagen
            $MisVis->image = $imageName;
        }

        // Actualiza el nombre
        $MisVis->name = $request->name;

        // Guarda los cambios
        $MisVis->save();

        // Establece el mensaje de éxito
        return redirect()->route('MisVis.index')->with('success', 'Misión y/o Visión actualizada correctamente');
    }

    public function status($id)
{
    // Encuentra el objeto por el id
    $estado = MisVis::find($id);

    // Cambiar el estado entre 'ACTIVE' y 'DESACTIVATE'
    if ($estado->status == 'ACTIVE') {
        // Cambiar a 'DESACTIVATE'
        $estado->status = 'DESACTIVATE';
        $estado->save(); // Guardar los cambios
        return redirect()->route('MisVis.indexD')->with('success', 'Elemento desactivado con éxito.');
    } else {
        // Cambiar a 'ACTIVE'
        $estado->status = 'ACTIVE';
        $estado->save(); // Guardar los cambios
        return redirect()->route('MisVis.index')->with('success', 'Elemento activado con éxito.');
    }
}

public function indexD()
{
    // Traer los elementos con estado 'DESACTIVATE'
    $MisVis = MisVis::where('status', 'DESACTIVATE')->get();
    return view('adminPC.MisVis.indexD', compact('MisVis'));
}



}
