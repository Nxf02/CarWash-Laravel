<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\ServicioController;

// Route::get('/', [HomeController::class, 'index']);
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/productos', [ProductoController::class, 'index'])->name('productos.index');

Route::get('/booking', function () { return view('booking'); })->name('booking');

// Ruta para mostrar la página de contacto
Route::get('/contacto', function () { return view('contacto'); })->name('contacto');

Route::get('/contacto', [ContactoController::class, 'index'])->name('contacto');
Route::post('/contacto', [ContactoController::class, 'enviar'])->name('contacto.enviar');

Route::get('/servicios', function () { return view('servicios'); })->name('servicios');

Route::get('/servicios', [ServicioController::class, 'index'])->name('servicios');

Route::view('/galeria', 'galeria')->name('galeria');