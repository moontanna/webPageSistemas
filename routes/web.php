<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
})->name('vista_inicio');

Route::get('/contact', function () {
    $nombre = "SunGo";
    return view('contact', ['nombre' => $nombre, 'Especialidad' => 'Paneles Solares']);
})->name('contact');

Route::get('/ventas', function () {
    return view('venta', [
        'descripcion_about' => 'Productos solares para hogares y negocios.',
        'actividad' => 'Tienda de productos solares',
        'texto_ejemplo' => 'Consulta los productos disponibles.',
    ]);
})->name('ventas');

Route::get('/empresa', function () {
    return redirect('/');
})->name('empresa');





