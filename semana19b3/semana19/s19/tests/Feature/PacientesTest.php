<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Paciente;

class PacientesTest extends TestCase
{
    use RefreshDatabase;
    
    public function test_lista_pacientes_vacia(){
        $response = $this->getJson('/api/pacientes');
        $response->assertStatus(200)->assertExactJson([]);
    }

    public function test_crear_un_paciente(){
        $datos=['nombre'=>"Ana",'direccion'=>'San Miguel',
        'motivocons'=>'dolor de cabeza'];
        $response = $this->postJson('/api/pacientes',$datos);
        $response->assertStatus(201)->assertJsonFragment($datos);
        $this->assertDatabaseHas('pacientes',$datos);
    }

    public function test_actualizar_un_paciente(){
        $paciente = Paciente::create(['nombre'=>"Luis",'direccion'=>'La Union',
        'motivocons'=>'dolor de pelo'
        ]);
        $datos = ['nombre'=>"Luis",'direccion'=>'La Union',
        'motivocons'=>'dolor de cuello'
        ];
        $response = $this->putJson("/api/pacientes/{$paciente->id}",$datos);
        $response->assertStatus(200)->assertJsonFragment([
            'motivocons'=>'dolor de cuello']);
        $this->assertDatabaseHas('pacientes',['motivocons'=>'dolor de cuello']);
    }

    public function test_eliminar_un_paciente(){
        $paciente = Paciente::create(['nombre'=>"Juan",'direccion'=>'Usulutan',
        'motivocons'=>'dolor de estomago'
        ]);

        $response = $this->deleteJson("/api/pacientes/{$paciente->id}");
        $response->assertStatus(200);
        $this->assertDatabaseMissing("pacientes",['id'=>$paciente->id]);
    }
    

}
