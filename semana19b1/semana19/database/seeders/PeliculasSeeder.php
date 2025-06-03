<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Peliculas;

class PeliculasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       /* Peliculas::create([
            "titulo"=>"Pelicula de prueba",
            "duracionmin"=>120,
            "festreno"=>"2021-02-02"
        ]);  */
        
        Peliculas::factory()->count(20)->create();
    }
}
