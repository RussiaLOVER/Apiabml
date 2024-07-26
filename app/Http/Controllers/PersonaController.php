<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonaController extends Controller
{
    public function crear(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string',
            'apellido' => 'required|string',
            'telefono' => 'required|string'
        ]);
    
        $persona = new Persona([
            'nombre' => $request->get('nombre'),
            'apellido' => $request->get('apellido'),
            'telefono' => $request->get('telefono')
        ]);
    
        $persona->save();
    
        return response()->json('Persona creada!');
    }
    
}
