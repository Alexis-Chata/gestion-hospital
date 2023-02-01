<?php

namespace Database\Seeders;

use App\Models\TipoExamen;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoExamenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //uno
        $ncategoria = new TipoExamen();
        $ncategoria->name = "Coprología Completa";
        $ncategoria->picture_tipo_examen = "/storage/texamenes/coprologia.png";
        $ncategoria->categoria_id = 1;
        $ncategoria->save();

        //2
        $ncategoria = new TipoExamen();
        $ncategoria->name = "Coprología Sangre Oculta";
        $ncategoria->picture_tipo_examen = "/storage/texamenes/coprologia.png";
        $ncategoria->categoria_id = 1;
        $ncategoria->save();


        //3
        $ncategoria = new TipoExamen();
        $ncategoria->name = "Coprología Helicobacter Pylori";
        $ncategoria->picture_tipo_examen = "/storage/texamenes/coprologia.png";
        $ncategoria->categoria_id = 1;
        $ncategoria->save();

        //4
        $ncategoria = new TipoExamen();
        $ncategoria->name = "Coprología Helicobacter + Sangre Oculta";
        $ncategoria->picture_tipo_examen = "/storage/texamenes/coprologia.png";
        $ncategoria->categoria_id = 1;
        $ncategoria->save();

        //5
        $ncategoria = new TipoExamen();
        $ncategoria->name = "Uroanáisis";
        $ncategoria->picture_tipo_examen = "/storage/texamenes/uroanalisis.png";
        $ncategoria->categoria_id = 2;
        $ncategoria->save();

        //6
        $ncategoria = new TipoExamen();
        $ncategoria->name = "Prueba de Embarazo";
        $ncategoria->picture_tipo_examen = "/storage/texamenes/prueba_embarazo.png";
        $ncategoria->categoria_id = 3;
        $ncategoria->save();

        //7
        $ncategoria = new TipoExamen();
        $ncategoria->name = "Química Sanguínea Completa";
        $ncategoria->picture_tipo_examen = "/storage/texamenes/quimica_sanguinia.png";
        $ncategoria->categoria_id = 4;
        $ncategoria->save();

        //8
        $ncategoria = new TipoExamen();
        $ncategoria->name = "Química Glucosa Pre Prandial";
        $ncategoria->picture_tipo_examen = "/storage/texamenes/quimica_sanguinia.png";
        $ncategoria->categoria_id = 4;
        $ncategoria->save();

        //9
        $ncategoria = new TipoExamen();
        $ncategoria->name = "Química Glucosa Pre + Glucosa Post + HB Glucosilada";
        $ncategoria->picture_tipo_examen = "/storage/texamenes/quimica_sanguinia.png";
        $ncategoria->categoria_id = 4;
        $ncategoria->save();

        //10
        $ncategoria = new TipoExamen();
        $ncategoria->name = "Química Glucosa Pre + Creatinina + Urea + Colesterol + Triglicéridos + Ác. Úrico";
        $ncategoria->picture_tipo_examen = "/storage/texamenes/quimica_sanguinia.png";
        $ncategoria->categoria_id = 4;
        $ncategoria->save();

        //11
        $ncategoria = new TipoExamen();
        $ncategoria->name = "Perfil Tiroideo";
        $ncategoria->picture_tipo_examen = "/storage/texamenes/quimica_sanguinia.png";
        $ncategoria->categoria_id = 4;
        $ncategoria->save();

        //12
        $ncategoria = new TipoExamen();
        $ncategoria->name = "Serología VIH + VDRL";
        $ncategoria->picture_tipo_examen = "/storage/texamenes/serologia.png";
        $ncategoria->categoria_id = 5;
        $ncategoria->save();

        //13
        $ncategoria = new TipoExamen();
        $ncategoria->name = "Serología Proteína C Reactiva + Factor Reumatoideo + Ác. Úrico";
        $ncategoria->picture_tipo_examen = "/storage/texamenes/serologia.png";
        $ncategoria->categoria_id = 5;
        $ncategoria->save();

        //14
        $ncategoria = new TipoExamen();
        $ncategoria->name = "Hematología";
        $ncategoria->picture_tipo_examen = "/storage/texamenes/blood.png";
        $ncategoria->categoria_id = 6;
        $ncategoria->save();

        //15
        $ncategoria = new TipoExamen();
        $ncategoria->name = "Tipo de Sangre";
        $ncategoria->picture_tipo_examen = "/storage/texamenes/blood.png";
        $ncategoria->categoria_id = 6;
        $ncategoria->save();
    }
}
