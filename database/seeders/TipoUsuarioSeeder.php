<?php

namespace Database\Seeders;

use App\Models\TipoUsuario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipoUsuario = new TipoUsuario();
        $tipoUsuario->name = 'Administrador';
        $tipoUsuario->save();

        $tipoUsuario = new TipoUsuario();
        $tipoUsuario->name = 'Medico';
        $tipoUsuario->save();

        $tipoUsuario = new TipoUsuario();
        $tipoUsuario->name = 'Operativo';
        $tipoUsuario->save();
    }
}
