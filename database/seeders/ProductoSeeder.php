<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Limpia la tabla antes de insertar para evitar duplicados o errores de llave foránea
        DB::table('producto')->delete();

        $now = Carbon::now();

        DB::table('producto')->insert([
            [
                'id_categoria' => 1,
                'nombre' => 'Panel solar 440W',
                'descripcion' => 'Panel solar para sistemas fotovoltaicos residenciales.',
                'id_imagen' => 1,
                'fecha_registro' => $now,
                'fecha_actualizacion' => $now,
                'usuario' => 'admin',
            ],
            [
                'id_categoria' => 1,
                'nombre' => 'panel solar500 w',
                'descripcion' => 'panel solar eficiente de alta potencia.',
                'id_imagen' => 2,
                'fecha_registro' => $now,
                'fecha_actualizacion' => $now,
                'usuario' => 'admin',
            ],
            [
                'id_categoria' => 1,
                'nombre' => 'Panel solar 550W',
                'descripcion' => 'Panel de alta eficiencia comercial.',
                'id_imagen' => 3,
                'fecha_registro' => $now,
                'fecha_actualizacion' => $now,
                'usuario' => 'admin',
            ],
            [
                'id_categoria' => 2,
                'nombre' => 'Inversor solar',
                'descripcion' => 'Inversor para sistema interconectado.',
                'id_imagen' => 4,
                'fecha_registro' => $now,
                'fecha_actualizacion' => $now,
                'usuario' => 'admin',
            ],
            [
                'id_categoria' => 3,
                'nombre' => 'Bateria solar',
                'descripcion' => 'Bateria para almacenamiento de energía.',
                'id_imagen' => 5,
                'fecha_registro' => $now,
                'fecha_actualizacion' => $now,
                'usuario' => 'admin',
            ],
            [
                'id_categoria' => 4,
                'nombre' => 'Controlador de carga',
                'descripcion' => 'Controlador para regular corriente de paneles.',
                'id_imagen' => 6,
                'fecha_registro' => $now,
                'fecha_actualizacion' => $now,
                'usuario' => 'admin',
            ],
            [
                'id_categoria' => 5,
                'nombre' => 'Cable solar 10 AWG',
                'descripcion' => 'Cable especial para instalaciones solares.',
                'id_imagen' => 7,
                'fecha_registro' => $now,
                'fecha_actualizacion' => $now,
                'usuario' => 'admin',
            ],
            [
                'id_categoria' => 6,
                'nombre' => 'Estructura de montaje',
                'descripcion' => 'Soporte metálico para techos inclinados.',
                'id_imagen' => 8,
                'fecha_registro' => $now,
                'fecha_actualizacion' => $now,
                'usuario' => 'admin',
            ],
        ]);
    }
}