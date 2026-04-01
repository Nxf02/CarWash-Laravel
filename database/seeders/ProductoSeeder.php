<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $now = Carbon::now();

        DB::table('productos')->insert([
            [
                'nombre' => 'Ambientador de Pino',
                'descripcion' => 'Clásico ambientador colgante para el retrovisor, varios aromas.',
                'precio' => 2.50,
                'stock' => 100,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nombre' => 'Cera Líquida Premium',
                'descripcion' => 'Botella de cera rápida para brillo extremo y protección UV.',
                'precio' => 15.00,
                'stock' => 30,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nombre' => 'Paño de Microfibra Secado Rápido',
                'descripcion' => 'Paño de alta absorción que no deja pelusas ni raya la pintura.',
                'precio' => 5.00,
                'stock' => 50,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nombre' => 'Abrillantador de Llantas',
                'descripcion' => 'Aerosol para dar brillo y aspecto de nuevo a los neumáticos.',
                'precio' => 8.50,
                'stock' => 40,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        ]);
    }
}
