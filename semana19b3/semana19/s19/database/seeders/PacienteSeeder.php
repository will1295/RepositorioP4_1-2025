<?php
namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Paciente;

class PacienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      /*  Paciente::create([
            'nombre'=>"Juanito",
            'direccion'=>"Morazan",
            'motivocons'=>"Dolor de nariz"
        ]);*/

        Paciente::factory()->count(20)->create();
    }
}
