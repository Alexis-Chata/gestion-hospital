<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ncategoria = new Categoria();
        $ncategoria->name = "Coprologia";
        $ncategoria->picture_category = "/storage/categorias/coprologia.png";
        $ncategoria->save();

        $ncategoria = new Categoria();
        $ncategoria->name = "Uroanálisis";
        $ncategoria->picture_category = "/storage/categorias/uroanalisis.png";
        $ncategoria->save();

        $ncategoria = new Categoria();
        $ncategoria->name = "Prueba de Embarazo";
        $ncategoria->picture_category = "/storage/categorias/prueba_embarazo.png";
        $ncategoria->save();

        $ncategoria = new Categoria();
        $ncategoria->name = "Quimica Sanguínea";
        $ncategoria->picture_category = "/storage/categorias/quimica_sanguinia.png";
        $ncategoria->save();

        $ncategoria = new Categoria();
        $ncategoria->name = "Serología";
        $ncategoria->picture_category = "/storage/categorias/serologia.png";
        $ncategoria->save();

        $ncategoria = new Categoria();
        $ncategoria->name = "Examenes Varios";
        $ncategoria->picture_category = "/storage/categorias/examenes_varios.png";
        $ncategoria->save();
    }
}
