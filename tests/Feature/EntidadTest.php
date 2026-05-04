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
        EntidadA::create([
            'nombre' => 'Entidad de prueba',
            'tipo'   => 'Guerrero',
            'poder'  => 100,
            'mundo'  => 'Earthea'
        ]);

        $response = $this->get('/entidades-a'); 
        $response->assertStatus(200);
        $response->assertSee('Entidad de prueba');
    }
}
