<?php

namespace Database\Seeders;

use App\Models\Asignacion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AsignacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $asignacion = new Asignacion();
        $asignacion->user_id = 1;
        $asignacion->tipo_usuario_id = 1;
        $asignacion->save();

        $asignacion = new Asignacion();
        $asignacion->user_id = 2;
        $asignacion->tipo_usuario_id = 1;
        $asignacion->save();

        $asignacion = new Asignacion();
        $asignacion->user_id = 3;
        $asignacion->tipo_usuario_id = 2;
        $asignacion->save();

        $asignacion = new Asignacion();
        $asignacion->user_id = 4;
        $asignacion->tipo_usuario_id = 3;
        $asignacion->save();
    }
}
