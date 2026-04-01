<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoController extends Controller
{
    // Muestra la página de contacto
    public function index()
    {
        return view('contacto');
    }

    // Procesa el formulario
    public function enviar(Request $request)
    {
        // Validar los datos (opcional pero recomendado)
        $request->validate([
            'nombre' => 'required',
            'telefono' => 'required',
        ]);

        // Por ahora, solo retornamos un mensaje de éxito
        return back()->with('success', '¡Gracias ' . $request->nombre . '! Hemos recibido tu mensaje.');
    }
}