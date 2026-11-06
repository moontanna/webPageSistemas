<?php

use App\Http\Controllers\TiendaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('vista_inicio');

Route::get('/contact', function () {
    $nombre = 'SunGo';

    return view('contact', ['nombre' => $nombre, 'Especialidad' => 'Paneles Solares']);
})->name('contact');

Route::get('/ventas', [TiendaController::class, 'index'])
    ->name('ventas');

Route::get('/empresa', function () {
    return redirect('/');
})->name('empresa');

Route::get('/tienda', [TiendaController::class, 'index'])
    ->name('tienda');

Route::get('/calculadora', function () {
    return view('calculadora');
})->name('calculadora');
