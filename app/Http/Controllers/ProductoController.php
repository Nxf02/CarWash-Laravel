<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    public function index()
    {
        // Traemos los productos de la base de datos
        $productos = Producto::all();

        // IMPORTANTE: Cambié 'productos.index' por 'productos' 
        // porque tu archivo se llama productos.blade.php (está en la raíz de views)
        return view('productos', compact('productos'));
    }
}