<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ServicioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        DB::table('servicios')->insert([
            [
                'nombre' => 'Lavado Sencillo',
                'descripcion' => 'Lavado exterior con espuma activa, secado manual y aspirado básico.',
                'precio' => 10.00,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nombre' => 'Lavado Completo + Cera',
                'descripcion' => 'Lavado exterior, aspirado profundo, limpieza de tableros y aplicación de cera protectora.',
                'precio' => 25.00,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nombre' => 'Detallado de Interiores (Shampoo)',
                'descripcion' => 'Lavado profundo de tapicería (tela o cuero), alfombras y techo con máquina de inyección-extracción.',
                'precio' => 60.00,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nombre' => 'Lavado de Motor',
                'descripcion' => 'Desengrasado y limpieza segura del compartimento del motor con vapor y productos dieléctricos.',
                'precio' => 20.00,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nombre' => 'Pulido de Faros',
                'descripcion' => 'Restauración de faros opacos o amarillentos para mejorar la visibilidad y estética.',
                'precio' => 15.00,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        ]);
    }
}
