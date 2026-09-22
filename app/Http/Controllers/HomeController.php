<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
 public function index()
    {
        return view('welcome');
    }

    public function empresa()
    {
        $datos["nombre"] = "Brisa Anahy Couoh Amaya";
        $datos["fecha"] = "2026-09-21";
        $datos["actividad"] = "Desarrollo de paneles solares";
        $datos["descripcion_about"] = "Empresa dedicada a la venta de paneles solares";
        $datos["texto_ejemplo"] = "Descripción texto de ejemplo";
        // $usuarios = new Pagina();
        // $datos["listadousuarios"] = $usuarios->ObtenerListado();
        return view('empresa', $datos);
    }
}