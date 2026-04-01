<?php

namespace App\Http\Controllers;

use App\Models\Servicio; // Asegúrate de tener el modelo creado
use Illuminate\Http\Request;

class ServicioController extends Controller
{
    public function index()
    {
        // Tomamos solo 4 para mantener la cuadrícula perfecta de 4 columnas
        $servicios = Servicio::take(4)->get();
        return view('servicios', compact('servicios'));
    }
}
