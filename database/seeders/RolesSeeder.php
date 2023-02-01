<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //crear roles
        $administrador = Role::create(['name' => 'Administrador']);
        $medico = Role::create(['name' => 'Medico']);
        $operativo = Role::create(['name' => 'Operativo']);
        //permiso
        Permission::create(['name' =>'admin.administrador.index'])->syncRoles(['Administrador']);
        Permission::create(['name' =>'admin.medico.index'])->syncRoles(['Medico']);
        Permission::create(['name' =>'admin.operativo.index'])->syncRoles(['Operativo']);
    }
}
