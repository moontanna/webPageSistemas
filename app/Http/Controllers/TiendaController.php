<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TiendaController extends Controller
{
     public function index()
    {
        $productos = DB::table('producto')
            ->leftJoin('imagen', 'producto.id_imagen', '=', 'imagen.id_imagen')
            ->select('producto.*', 'imagen.ruta')
            ->get();

        return view('venta', [
            'productos' => $productos,
            'descripcion_about' => 'Productos solares para hogares y negocios.',
            'actividad' => 'Tienda de productos solares',
            'texto_ejemplo' => 'Consulta los productos disponibles.',
        ]);
    }
}
