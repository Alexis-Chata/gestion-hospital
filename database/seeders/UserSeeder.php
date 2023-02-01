<?php

namespace Database\Seeders;

use App\Models\Medico;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuarioadmin = new User();
        $usuarioadmin->username = 'admin';
        $usuarioadmin->firstname = 'Admin';
        $usuarioadmin->lastname = 'Admin';
        $usuarioadmin->email = 'ing.anthonny.joel@gmail.com';
        $usuarioadmin->password = 'secret';
        $usuarioadmin->genero = '0';
        $usuarioadmin->save();
        $usuarioadmin->assignRole('Administrador');
        $usuarioMedico = new Medico();
        $usuarioMedico->user_id = $usuarioadmin->id;
        $usuarioMedico->colegiatura = 'Colegiado No. 13,566';
        $usuarioMedico->universidad = 'Egresado de la UNAM, Mexíco D.F';
        $usuarioMedico->carrera = 'Medicina Interna,Gastroenterólogo y Endoscopía Digestiva';
        $usuarioMedico->especialidad = 'Especialidad en enfermedades del Sistema Disgetivo,Hospitalización';
        $usuarioMedico->save();

        $usuarioadmin = new User();
        $usuarioadmin->username = 'administrador';
        $usuarioadmin->firstname = 'administrador';
        $usuarioadmin->lastname = 'SanRafael';
        $usuarioadmin->email = 'administrador@sanrafael.com';
        $usuarioadmin->password = 'secret';
        $usuarioadmin->genero = '0';
        $usuarioadmin->save();
        $usuarioadmin->assignRole('Administrador');
        $usuarioMedico = new Medico();
        $usuarioMedico->user_id = $usuarioadmin->id;
        $usuarioMedico->colegiatura = 'Colegiado No. 13,566';
        $usuarioMedico->universidad = 'Egresado de la UNAM, Mexíco D.F';
        $usuarioMedico->carrera = 'Medicina Interna,Gastroenterólogo y Endoscopía Digestiva';
        $usuarioMedico->especialidad = 'Especialidad en enfermedades del Sistema Disgetivo,Hospitalización';
        $usuarioMedico->save();

        $usuarioadmin = new User();
        $usuarioadmin->username = 'medico';
        $usuarioadmin->firstname = 'medico';
        $usuarioadmin->lastname = 'SanRafael';
        $usuarioadmin->email = 'medico@sanrafael.com';
        $usuarioadmin->password = 'secret';
        $usuarioadmin->genero = '0';
        $usuarioadmin->save();
        $usuarioadmin->assignRole('Medico');

        $usuarioadmin = new User();
        $usuarioadmin->username = 'operativo';
        $usuarioadmin->firstname = 'operativo';
        $usuarioadmin->lastname = 'SanRafael';
        $usuarioadmin->email = 'operativo@sanrafael.com';
        $usuarioadmin->password = 'secret';
        $usuarioadmin->genero = '0';
        $usuarioadmin->save();
        $usuarioadmin->assignRole('Operativo');

        DB::table('users')->insert([
            'username' => 'admin',
            'firstname' => 'Admin',
            'lastname' => 'Admin',
            'genero' => '0',
            'email' => 'admin@argon.com',
            'password' => bcrypt('secret')
        ]);
        User::firstWhere('email', 'admin@argon.com')->assignRole('Administrador');
    }
}
