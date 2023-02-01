<?php

namespace Database\Seeders;

use App\Models\Paciente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PacienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $n_paciente = new Paciente();
        $n_paciente->firstname = "Juan";
        $n_paciente->lastname = "Miguel";
        $n_paciente->genero = 0;
        $n_paciente->edad = 27;
        $n_paciente->direccion = "Mz C Lt 15 San Genaro";
        $n_paciente->celular = "987989879";
        $n_paciente->telefono = "141-5689";
        $n_paciente->telefono2 = "041-65478";
        $n_paciente->save();

    }
}
