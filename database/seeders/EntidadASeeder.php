<?php

namespace Database\Seeders;

use App\Models\EntidadA;
use App\Models\EntidadB;
use App\Models\EntidadC;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EntidadASeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EntidadA::create([
            'nombre' => 'Elemento A1',
            'tipo' => 'Fuego',
            'poder' => 60,
            'mundo' => 'Reino Champi'
        ]);

         EntidadB::create([
            'nombre' => 'Elemento A2',
            'tipo' => 'Hielo',
            'poder' => 50,
            'mundo' => 'Mundo tuberias'
        ]);
    }
}
