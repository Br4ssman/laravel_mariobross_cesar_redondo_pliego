<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\EntidadA;
use PHPUnit\Framework\Attributes\Test;

class EntidadTest extends TestCase
{
    use RefreshDatabase;

#[Test]
    public function la_lista_de_entidades_es_accesible()
    {
        // Rellenamos TODOS los campos que tu modelo EntidadA exige
        EntidadA::create([
            'nombre' => 'Personaje de Prueba',
            'tipo'   => 'Guerrero',
            'poder'  => 50,
            'mundo'  => 'Mundo Alpha'
        ]);

        // Intentamos entrar a la URL. 
        // Si tu controlador usa Route::resource('entidadesA', ...), la ruta será '/entidadesA'
        // Si no sabes cuál es, prueba con la que tengas en web.php
        $response = $this->get('/entidadesA'); 

        $response->assertStatus(200);
        $response->assertSee('Personaje de Prueba');
    }
}

