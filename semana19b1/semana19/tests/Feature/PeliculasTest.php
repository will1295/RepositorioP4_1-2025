<?php

namespace Tests\Feature;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Peliculas;

class PeliculasTest extends TestCase
{
    use RefreshDatabase;
  
    public function test_lista_vacia(){
        $response = $this->getJson('/api/peliculas');
        $response->assertStatus(200)->assertExactJson([]);
    }

    public function test_crear_una_pelicula(){
        $datos = ["titulo"=>"Titanic","duracionmin"=>180,"festreno"=>"1997-12-19"];
        $response=$this->postJson("/api/peliculas",$datos);
        $response->assertStatus(201)->assertJsonFragment($datos);
        $this->assertDatabaseHas("peliculas",$datos);
    }

    public function test_actualizar_una_pelicula(){
        $pelicula = Peliculas::create([
            "titulo"=>"Lilo y stich","duracionmin"=>120,"festreno"=>"2027-05-29"
        ]);
        $act = [
            "titulo"=>"Lilo y stich","duracionmin"=>120,"festreno"=>"2025-05-29"
        ];
        $response = $this->putJson("/api/peliculas/{$pelicula->id}",$act);
        $response->assertStatus(200)->assertJsonFragment([
            "festreno"=>"2025-05-29"
        ]);
        $this->assertDatabaseHas("peliculas",["festreno"=>"2025-05-29"]);
    }
  
    public function test_eliminar_una_pelicula(){
        $pelicula = Peliculas::create([
            "titulo"=>"Pelicula x","duracionmin"=>120,"festreno"=>"2024-05-29"
        ]);
        $response = $this->deleteJson("/api/peliculas/{$pelicula->id}");
        $response->assertStatus(200);
        $this->assertDatabaseMissing("peliculas",["id"=>$pelicula->id]);
    }
}
