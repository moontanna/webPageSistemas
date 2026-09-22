<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
})->name ('vista_inicio');

Route::get('/contact', function(){
   $nombre="SunGo";
   return view('contact', ['nombre' => $nombre, 'Especialidad' => 'Paneles Solares']);
})->name ('contact');

Route::get('/empresa',[HomeController::class,'empresa'])->name('empresa');





