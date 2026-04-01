<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Servicio;
class HomeController extends Controller
{
    public function index()
    {
$servicios = Servicio::all();
        return view('home',[
            'servicios' => $servicios
        ]);
    }
}
