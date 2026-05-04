<?php

namespace Database\Seeders;

use App\Models\EntidadB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EntidadBSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EntidadB::create([
            'nombre' => 'Elemento B1',
            'tipo' => 'Tipo Uno',
            'nivel' => 1,
            'entidad_a_id' => 1
        ]);

        EntidadB::create([
            'nombre' => 'Elemento B2',
            'tipo' => 'Tipo Dos',
            'nivel' => 2,
            'entidad_a_id' => 2
        ]);
    }
}
