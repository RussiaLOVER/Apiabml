<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonaController extends Controller
{
    public function test(Request $request)
    {
        $request->validate([
            'ID' => 'required|string',
            'nombre' => 'required|string',
            'apellido' => 'required|string',
            'telefono' => 'required|string'
        ]);
    
        $persona = new Persona([
            'ID' => $request->get('ID'),
            'nombre' => $request->get('nombre'),
            'apellido' => $request->get('apellido'),
            'telefono' => $request->get('telefono')
        ]);
    
        $persona->save();
    
        return response()->json('Persona creada!');
    }
    


    public function delete($id)
    {
        $persona = Persona::find($id);
        $persona->delete();
    
        return response()->json('Persona borrada!');
    }
    
    public function editar(Request $request, $id)
{
    $request->validate([
        'nombre' => 'required|string',
        'apellido' => 'required|string',
        'telefono' => 'required|string'
    ]);

    $persona = Persona::find($id);
    $persona->update($request->all());

    return response()->json('Persona editada!');
}


public function index()
{
    $personas = Persona::all();
    return response()->json($personas);
}


public function buscar($nombre)
{
    $personas = Persona::where('nombre', 'like', '%' . $nombre . '%')->get();
    return response()->json($personas);
}


}
