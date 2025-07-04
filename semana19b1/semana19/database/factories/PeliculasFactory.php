<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Peliculas>
 */
class PeliculasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "titulo"=>$this->faker->words(2,true),
            "duracionmin"=>$this->faker->numberBetween(100,300),
            "festreno"=>$this->faker->date()
        ];
    }
}
