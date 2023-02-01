<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategoriaSeeder::class);
        $this->call(TipoExamenSeeder::class);
        $this->call(CampoSeeder::class);
        $this->call(PacienteSeeder::class);
        $this->call(RolesSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(TipoUsuarioSeeder::class);
        $this->call(AsignacionSeeder::class);
    }
}
