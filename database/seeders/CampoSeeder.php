<?php

namespace Database\Seeders;

use App\Models\Campo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CampoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        /*tipo de Sangre*/
        $ncampo = new Campo();
        $ncampo->name = "TIPIFICACIÓN ABO";
        $ncampo->datatype = "titulo";
        $ncampo->tipo_examen_id = 15;
        $ncampo->columna = 2;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "encabezado";
        $ncampo->datatype = "leyenda";
        $ncampo->param1 = "Examen";
        $ncampo->param2 = "Resultado";
        $ncampo->param3 = null;
        $ncampo->columna = 2;
        $ncampo->tipo_examen_id = 15;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Grupo Sanguíneo";
        $ncampo->leyenda = "";
        $ncampo->datatype = "list";
        $ncampo->defaultdata = "";
        $ncampo->param1 = "A,B,O,A-B";
        $ncampo->required = null;
        $ncampo->tipo_examen_id = 15;
        $ncampo->columna = 2;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Factor RH";
        $ncampo->leyenda = "";
        $ncampo->datatype = "list";
        $ncampo->defaultdata = "";
        $ncampo->param1 = "POSITIVO,NEGATIVO";
        $ncampo->required = null;
        $ncampo->tipo_examen_id = 15;
        $ncampo->columna = 2;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Observaciones";
        $ncampo->datatype = "textarea";
        $ncampo->tipo_examen_id = 15;
        $ncampo->columna = 2;
        $ncampo->save();


        /*Hematolgia*/
        $ncampo = new Campo();
        $ncampo->name = "HEMATOLOGÍA";
        $ncampo->datatype = "titulo";
        $ncampo->tipo_examen_id = 14;
        $ncampo->columna = 3;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "encabezado";
        $ncampo->datatype = "leyenda";
        $ncampo->param1 = "Examen";
        $ncampo->param2 = "Resultado";
        $ncampo->param3 = "Velocidad de sedimentación";
        $ncampo->columna = 3;
        $ncampo->tipo_examen_id = 14;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Velocidad de eritrosedimentación";
        $ncampo->leyenda = "mm/hr";
        $ncampo->datatype = "listnumber";
        $ncampo->defaultdata = "";
        $ncampo->param1 = "1";
        $ncampo->param2 = "100";
        $ncampo->columna = 3;
        $ncampo->required = null;
        $ncampo->tipo_examen_id = 14;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Observaciones";
        $ncampo->datatype = "textarea";
        $ncampo->tipo_examen_id = 14;
        $ncampo->columna = 3;
        $ncampo->save();

        /*Serología Proteína C Reactiva + Factor Reumatoideo + Ác. Úrico*/
        $ncampo = new Campo();
        $ncampo->name = "SEROLOGÍA";
        $ncampo->datatype = "titulo";
        $ncampo->tipo_examen_id = 13;
        $ncampo->columna = 3;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "parasitos";
        $ncampo->datatype = "leyenda";
        $ncampo->param1 = "Examen";
        $ncampo->param2 = "Resultado";
        $ncampo->param3 = "Valor Normal";
        $ncampo->columna = 3;
        $ncampo->tipo_examen_id = 13;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Proteina C reactiva";
        $ncampo->leyenda = "Menor a 6mg/dl";
        $ncampo->datatype = "list";
        $ncampo->defaultdata = "";
        $ncampo->param1 = "Negativo menor a 6,Positivo en 24,Positivo en 48,Positivo en 96,Positivo en 192,Positivo en 384";
        $ncampo->required = null;
        $ncampo->columna = 3;
        $ncampo->tipo_examen_id = 13;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Factor reumatoide";
        $ncampo->leyenda = "Menor de 12 UL/ml";
        $ncampo->datatype = "list";
        $ncampo->defaultdata = "";
        $ncampo->param1 = "Negativo menor de 12,Positivo en 24,Positivo en 48,Positivo en 96,Positivo en 192,Positivo en 384, Positivo en 768";
        $ncampo->required = null;
        $ncampo->columna = 3;
        $ncampo->tipo_examen_id = 13;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Ácido Úrico";
        $ncampo->leyenda = "Mujeres : 2.4 a 5.7 mg/dl, Hombres : 3.4 a 7.0 mg/dl";
        $ncampo->datatype = "text";
        $ncampo->tipo_examen_id = 13;
        $ncampo->required = null;
        $ncampo->columna = 3;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Observaciones";
        $ncampo->datatype = "textarea";
        $ncampo->tipo_examen_id = 13;
        $ncampo->columna = 3;
        $ncampo->save();

        /*Serología VIH + VDRL*/
        $ncampo = new Campo();
        $ncampo->name = "SEROLOGÍA";
        $ncampo->datatype = "titulo";
        $ncampo->tipo_examen_id = 12;
        $ncampo->columna = 3;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "parasitos";
        $ncampo->datatype = "leyenda";
        $ncampo->param1 = "Examen";
        $ncampo->param2 = "Resultado";
        $ncampo->param3 = "Valor Normal";
        $ncampo->tipo_examen_id = 12;
        $ncampo->columna = 3;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "VIH";
        $ncampo->leyenda = "NEGATIVO";
        $ncampo->datatype = "list";
        $ncampo->defaultdata = "";
        $ncampo->param1 = "Positivo, Negativo";
        $ncampo->required = null;
        $ncampo->tipo_examen_id = 12;
        $ncampo->columna = 3;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "VDRL";
        $ncampo->leyenda = "NEGATIVO";
        $ncampo->datatype = "list";
        $ncampo->defaultdata = "";
        $ncampo->param1 = "Positivo, No Reactivo";
        $ncampo->required = null;
        $ncampo->tipo_examen_id = 12;
        $ncampo->columna = 3;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Observaciones";
        $ncampo->datatype = "textarea";
        $ncampo->tipo_examen_id = 12;
        $ncampo->columna = 3;
        $ncampo->save();

        /*Perfil Tiroideo*/
        $ncampo = new Campo();
        $ncampo->name = "PERFIL TIROIDEO";
        $ncampo->datatype = "titulo";
        $ncampo->tipo_examen_id = 11;
        $ncampo->columna = 3;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "parasitos";
        $ncampo->datatype = "leyenda";
        $ncampo->param1 = "Examen";
        $ncampo->param2 = "Resultado";
        $ncampo->param3 = "Valor Normal";
        $ncampo->tipo_examen_id = 11;
        $ncampo->columna = 3;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "T3";
        $ncampo->leyenda = "1.3 a 3.1 nmol/L";
        $ncampo->datatype = "text";
        $ncampo->tipo_examen_id = 11;
        $ncampo->required = null;
        $ncampo->columna = 3;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "T4";
        $ncampo->leyenda = "66 a 181 nmol/L";
        $ncampo->datatype = "text";
        $ncampo->tipo_examen_id = 11;
        $ncampo->required = null;
        $ncampo->columna = 3;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "TSH";
        $ncampo->leyenda = "0.3 a 4.2 mIU/L";
        $ncampo->datatype = "text";
        $ncampo->tipo_examen_id = 11;
        $ncampo->required = null;
        $ncampo->columna = 3;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Observaciones";
        $ncampo->datatype = "textarea";
        $ncampo->tipo_examen_id = 11;
        $ncampo->columna = 3;
        $ncampo->save();

        /*Química Glucosa Pre + Creatinina + Urea + Colesterol + Triglicéridos + Ác. Úrico*/
        $ncampo = new Campo();
        $ncampo->name = "QUÍMICA";
        $ncampo->datatype = "titulo";
        $ncampo->tipo_examen_id = 10;
        $ncampo->columna = 3;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "parasitos";
        $ncampo->datatype = "leyenda";
        $ncampo->param1 = "Examen";
        $ncampo->param2 = "Resultado";
        $ncampo->param3 = "Valor Normal";
        $ncampo->tipo_examen_id = 10;
        $ncampo->columna = 3;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Glucosa pre prandial";
        $ncampo->leyenda = "70 a 115 mg/dl";
        $ncampo->datatype = "text";
        $ncampo->tipo_examen_id = 10;
        $ncampo->required = null;
        $ncampo->columna = 3;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Creatinina";
        $ncampo->leyenda = "Mujeres : 0.50 a 0.90 mg/dl, Hombres: 0.70 a 1.20 mg/dl";
        $ncampo->datatype = "text";
        $ncampo->tipo_examen_id = 10;
        $ncampo->required = null;
        $ncampo->columna = 3;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Nitrógeno de urea";
        $ncampo->leyenda = "4.7 a 23mg/dl";
        $ncampo->datatype = "text";
        $ncampo->tipo_examen_id = 10;
        $ncampo->required = null;
        $ncampo->columna = 3;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Colesterol Total";
        $ncampo->leyenda = "Menor de 200 mg/dl";
        $ncampo->datatype = "text";
        $ncampo->tipo_examen_id = 10;
        $ncampo->required = null;
        $ncampo->columna = 3;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Triglicéridos";
        $ncampo->leyenda = "Menor de 200 mg/dl";
        $ncampo->datatype = "text";
        $ncampo->tipo_examen_id = 10;
        $ncampo->required = null;
        $ncampo->columna = 3;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Ácido Úrico";
        $ncampo->leyenda = "Mujeres : 2.4 a 5.7 mg/dl, Hombres: 3.4 a 7.0 mg/dl";
        $ncampo->datatype = "text";
        $ncampo->tipo_examen_id = 10;
        $ncampo->required = null;
        $ncampo->columna = 3;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Observaciones";
        $ncampo->datatype = "textarea";
        $ncampo->tipo_examen_id = 10;
        $ncampo->columna = 3;
        $ncampo->save();

        /*Química Glucosa Pre + Glucosa Post + HB Glucosilada*/
        $ncampo = new Campo();
        $ncampo->name = "QUÍMICA";
        $ncampo->datatype = "titulo";
        $ncampo->tipo_examen_id = 9;
        $ncampo->columna = 3;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "parasitos";
        $ncampo->datatype = "leyenda";
        $ncampo->param1 = "Examen";
        $ncampo->param2 = "Resultado";
        $ncampo->param3 = "Valor Normal";
        $ncampo->tipo_examen_id = 9;
        $ncampo->columna = 3;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Glucosa pre prandial";
        $ncampo->leyenda = "70 a 115 mg/dl";
        $ncampo->datatype = "text";
        $ncampo->tipo_examen_id = 9;
        $ncampo->required = null;
        $ncampo->columna = 3;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Glucosa post prandial";
        $ncampo->leyenda = "70 a 140 mg/dl";
        $ncampo->datatype = "text";
        $ncampo->tipo_examen_id = 9;
        $ncampo->columna = 3;
        $ncampo->required = null;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "HB Glucosilada";
        $ncampo->leyenda = "4 a 6 %";
        $ncampo->datatype = "text";
        $ncampo->tipo_examen_id = 9;
        $ncampo->columna = 3;
        $ncampo->required = null;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Observaciones";
        $ncampo->datatype = "textarea";
        $ncampo->tipo_examen_id = 9;
        $ncampo->columna = 3;
        $ncampo->save();

        /*Química Glucosa Pre Prandial*/
        $ncampo = new Campo();
        $ncampo->name = "QUÍMICA";
        $ncampo->datatype = "titulo";
        $ncampo->tipo_examen_id = 8;
        $ncampo->columna = 3;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "parasitos";
        $ncampo->datatype = "leyenda";
        $ncampo->param1 = "Examen";
        $ncampo->param2 = "Resultado";
        $ncampo->param3 = "Valor Normal";
        $ncampo->columna = 3;
        $ncampo->tipo_examen_id = 8;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Glucosa pre prandial";
        $ncampo->leyenda = "70 a 115 mg/dl";
        $ncampo->datatype = "text";
        $ncampo->tipo_examen_id = 8;
        $ncampo->required = null;
        $ncampo->columna = 3;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Observaciones";
        $ncampo->datatype = "textarea";
        $ncampo->tipo_examen_id = 8;
        $ncampo->columna = 3;
        $ncampo->save();

        /*Química Sanguínea Completa*/
        $ncampo = new Campo();
        $ncampo->name = "QUÍMICA";
        $ncampo->datatype = "titulo";
        $ncampo->tipo_examen_id = 7;
        $ncampo->columna = 3;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "parasitos";
        $ncampo->datatype = "leyenda";
        $ncampo->param1 = "Examen";
        $ncampo->param2 = "Resultado";
        $ncampo->param3 = "Valor Normal";
        $ncampo->tipo_examen_id = 7;
        $ncampo->columna = 3;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Glucosa pre prandial";
        $ncampo->leyenda = "70 a 115 mg/dl";
        $ncampo->datatype = "text";
        $ncampo->tipo_examen_id = 7;
        $ncampo->required = null;
        $ncampo->columna = 3;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Glucosa post prandial";
        $ncampo->leyenda = "70 a 140 mg/dl";
        $ncampo->datatype = "text";
        $ncampo->tipo_examen_id = 7;
        $ncampo->required = null;
        $ncampo->columna = 3;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "HB Glucosilada";
        $ncampo->leyenda = "4 a 6%";
        $ncampo->datatype = "text";
        $ncampo->tipo_examen_id = 7;
        $ncampo->required = null;
        $ncampo->columna = 3;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Creatinina";
        $ncampo->leyenda = "Mujeres : 0.50 a 0.90 mg/dl,hombres : 0.70 a 120 mg/dl";
        $ncampo->datatype = "text";
        $ncampo->tipo_examen_id = 7;
        $ncampo->required = null;
        $ncampo->columna = 3;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Nitrogeno de urea";
        $ncampo->leyenda = "4.7 a 23 mg/dl";
        $ncampo->datatype = "text";
        $ncampo->tipo_examen_id = 7;
        $ncampo->required = null;
        $ncampo->columna = 3;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Colesterol";
        $ncampo->leyenda = "menor de 200 mg/dl";
        $ncampo->datatype = "text";
        $ncampo->tipo_examen_id = 7;
        $ncampo->required = null;
        $ncampo->columna = 3;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Trigliceridos";
        $ncampo->leyenda = "menor de 200 mg/dl";
        $ncampo->datatype = "text";
        $ncampo->tipo_examen_id = 7;
        $ncampo->required = null;
        $ncampo->columna = 3;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Ácido Úrico";
        $ncampo->leyenda = "Mujeres : 2.4 a 5.7 mg/dl, Hombres: 3.4 a 7.0 mg/dl";
        $ncampo->datatype = "text";
        $ncampo->tipo_examen_id = 7;
        $ncampo->required = null;
        $ncampo->columna = 3;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "TGO";
        $ncampo->leyenda = "Mujeres : 32 U/L, Hombres: Hasta 38 U/L";
        $ncampo->datatype = "text";
        $ncampo->tipo_examen_id = 7;
        $ncampo->required = null;
        $ncampo->columna = 3;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "TGP";
        $ncampo->leyenda = "Mujeres : 31 U/L, Hombres: Hasta 41 U/L";
        $ncampo->datatype = "text";
        $ncampo->tipo_examen_id = 7;
        $ncampo->required = null;
        $ncampo->columna = 3;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "GGT";
        $ncampo->leyenda = "Mujeres : 5 a 40 U/L, Hombres: Hasta 8 a 61 U/L";
        $ncampo->datatype = "text";
        $ncampo->tipo_examen_id = 7;
        $ncampo->columna = 3;
        $ncampo->required = null;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "BBSS Total";
        $ncampo->leyenda = "Hasta 1 mg/dl";
        $ncampo->datatype = "text";
        $ncampo->tipo_examen_id = 7;
        $ncampo->columna = 3;
        $ncampo->required = null;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "BBSS Directa";
        $ncampo->leyenda = "Hasta 0.25 mg/dl";
        $ncampo->datatype = "text";
        $ncampo->tipo_examen_id = 7;
        $ncampo->columna = 3;
        $ncampo->required = null;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "BBSS Indirecta";
        $ncampo->leyenda = "Hasta 0.75 mg/dl";
        $ncampo->datatype = "text";
        $ncampo->tipo_examen_id = 7;
        $ncampo->required = null;
        $ncampo->columna = 3;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Helicobacter Pylori";
        $ncampo->leyenda = "Positivo / Negativo";
        $ncampo->datatype = "list";
        $ncampo->defaultdata = "";
        $ncampo->param1 = "Negativo,Positivo";
        $ncampo->required = null;
        $ncampo->tipo_examen_id = 7;
        $ncampo->columna = 3;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Antiestreptolisinas O";
        $ncampo->leyenda = "Menor a 200 UI/L";
        $ncampo->datatype = "list";
        $ncampo->defaultdata = "";
        $ncampo->param1 = "Negativo menor a 200,Positivo en 400,Positivo en 800,Positivo en 1600,Positivo en 3200";
        $ncampo->required = null;
        $ncampo->tipo_examen_id = 7;
        $ncampo->columna = 3;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Proteína C Reactiva";
        $ncampo->leyenda = "Menor a 6 mg/dl";
        $ncampo->datatype = "list";
        $ncampo->defaultdata = "";
        $ncampo->param1 = "Negativo menor a 6,Positivo en 12,Positivo en 24,Positivo en 48,Positivo en 96,Positivo en 192,Positivo en 384";
        $ncampo->required = null;
        $ncampo->tipo_examen_id = 7;
        $ncampo->columna = 3;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Factor reumatoide";
        $ncampo->leyenda = "Menor de 12 UL/ml";
        $ncampo->datatype = "list";
        $ncampo->defaultdata = "";
        $ncampo->param1 = "Negativo menor de 12,Positivo en 24,Positivo en 48,Positivo en 96,Positivo en 192,Positivo en 384, Positivo en 768";
        $ncampo->required = null;
        $ncampo->tipo_examen_id = 7;
        $ncampo->columna = 3;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Widal Antingeno A";
        $ncampo->leyenda = "Negativo";
        $ncampo->datatype = "list";
        $ncampo->defaultdata = "";
        $ncampo->param1 = "Negativo,Positivo 1:20,Positivo 1:40,Positivo 1:80,Positivo 1:160,Positivo 1:320";
        $ncampo->required = null;
        $ncampo->tipo_examen_id = 7;
        $ncampo->columna = 3;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Widal Antingeno O";
        $ncampo->leyenda = "Negativo";
        $ncampo->datatype = "list";
        $ncampo->defaultdata = "";
        $ncampo->param1 = "Negativo,Positivo 1:20,Positivo 1:40,Positivo 1:80,Positivo 1:160,Positivo 1:320";
        $ncampo->required = null;
        $ncampo->tipo_examen_id = 7;
        $ncampo->columna = 3;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Widal Antingeno H";
        $ncampo->leyenda = "Negativo";
        $ncampo->datatype = "list";
        $ncampo->defaultdata = "";
        $ncampo->param1 = "Negativo,Positivo 1:20,Positivo 1:40,Positivo 1:80,Positivo 1:160,Positivo 1:320";
        $ncampo->required = null;
        $ncampo->tipo_examen_id = 7;
        $ncampo->columna = 3;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "VDRL";
        $ncampo->leyenda = "No Reactivo";
        $ncampo->datatype = "list";
        $ncampo->defaultdata = "";
        $ncampo->param1 = "Positivo, No reactivo";
        $ncampo->required = null;
        $ncampo->tipo_examen_id = 7;
        $ncampo->columna = 3;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "HCG";
        $ncampo->leyenda = "No Reactivo";
        $ncampo->datatype = "list";
        $ncampo->defaultdata = "";
        $ncampo->param1 = "Positivo,Negativo";
        $ncampo->required = null;
        $ncampo->tipo_examen_id = 7;
        $ncampo->columna = 3;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "VIH";
        $ncampo->leyenda = "Negativo";
        $ncampo->datatype = "list";
        $ncampo->defaultdata = "";
        $ncampo->param1 = "Positivo, Negativo";
        $ncampo->required = null;
        $ncampo->tipo_examen_id = 7;
        $ncampo->columna = 3;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Observaciones";
        $ncampo->datatype = "textarea";
        $ncampo->tipo_examen_id = 7;
        $ncampo->columna = 3;
        $ncampo->save();

        /*Prueba de Embarazo*/
        $ncampo = new Campo();
        $ncampo->name = "PRUEBA DE EMBARAZO";
        $ncampo->datatype = "titulo";
        $ncampo->tipo_examen_id = 6;
        $ncampo->columna = 3;
        $ncampo->save();


        $ncampo = new Campo();
        $ncampo->name = "parasitos";
        $ncampo->datatype = "leyenda";
        $ncampo->param1 = "Examen";
        $ncampo->param2 = "Resultado";
        $ncampo->param3 = "Valor Normal";
        $ncampo->tipo_examen_id = 6;
        $ncampo->columna = 3;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Prueba de embarazo";
        $ncampo->leyenda = "Positivo / Negativo";
        $ncampo->datatype = "list";
        $ncampo->defaultdata = "";
        $ncampo->param1 = "Negativo,Positivo";
        $ncampo->required = null;
        $ncampo->tipo_examen_id = 6;
        $ncampo->columna = 3;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Observaciones";
        $ncampo->datatype = "textarea";
        $ncampo->tipo_examen_id = 6;
        $ncampo->columna = 3;
        $ncampo->save();

        /*Uroanáisis*/
        $ncampo = new Campo();
        $ncampo->name = "Examen Macroscopico";
        $ncampo->datatype = "titulo";
        $ncampo->tipo_examen_id = 5;
        $ncampo->columna = 2;
        $ncampo->save();


        $ncampo = new Campo();
        $ncampo->name = "Color";
        $ncampo->leyenda = "";
        $ncampo->datatype = "list";
        $ncampo->defaultdata = "";
        $ncampo->param1 = "Amarillo,Ámbar,Rojiza,Coca Cola";
        $ncampo->required = null;
        $ncampo->tipo_examen_id = 5;
        $ncampo->columna = 2;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Aspecto";
        $ncampo->leyenda = "";
        $ncampo->datatype = "list";
        $ncampo->defaultdata = "";
        $ncampo->param1 = "Turbia,Ligeramente Turbia,Muy Turbia";
        $ncampo->required = null;
        $ncampo->tipo_examen_id = 5;
        $ncampo->columna = 2;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Sedimento";
        $ncampo->leyenda = "";
        $ncampo->datatype = "list";
        $ncampo->defaultdata = "";
        $ncampo->param1 = "+,++,+++";
        $ncampo->required = null;
        $ncampo->tipo_examen_id = 5;
        $ncampo->columna = 2;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Densidad";
        $ncampo->leyenda = "";
        $ncampo->datatype = "list";
        $ncampo->defaultdata = "";
        $ncampo->param1 = "1.000,1.005,1.010,1.015,1.020,1.025,1.030";
        $ncampo->required = null;
        $ncampo->tipo_examen_id = 5;
        $ncampo->columna = 2;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Reacción pH";
        $ncampo->leyenda = "";
        $ncampo->datatype = "list";
        $ncampo->defaultdata = "";
        $ncampo->param1 = "5,6,6.5,7,8,9";
        $ncampo->required = null;
        $ncampo->tipo_examen_id = 5;
        $ncampo->columna = 2;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Examen Química";
        $ncampo->datatype = "titulo";
        $ncampo->tipo_examen_id = 5;
        $ncampo->columna = 2;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Bilirrubinas";
        $ncampo->leyenda = "";
        $ncampo->datatype = "list";
        $ncampo->defaultdata = "";
        $ncampo->param1 = "+,++,+++";
        $ncampo->required = null;
        $ncampo->tipo_examen_id = 5;
        $ncampo->columna = 2;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Cuerpos Cetónicos";
        $ncampo->leyenda = "";
        $ncampo->datatype = "list";
        $ncampo->defaultdata = "";
        $ncampo->param1 = "Trazas,+,++,+++";
        $ncampo->required = null;
        $ncampo->tipo_examen_id = 5;
        $ncampo->columna = 2;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Glucosa";
        $ncampo->leyenda = "";
        $ncampo->datatype = "list";
        $ncampo->defaultdata = "";
        $ncampo->param1 = "50 mg/dL,100 mg/dL,250 mg/dL,500 mg/dL,1000 mg/dL";
        $ncampo->required = null;
        $ncampo->tipo_examen_id = 5;
        $ncampo->columna = 2;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Hemoglobina";
        $ncampo->leyenda = "";
        $ncampo->datatype = "list";
        $ncampo->defaultdata = "";
        $ncampo->param1 = "Trazas,+,++,+++";
        $ncampo->required = null;
        $ncampo->tipo_examen_id = 5;
        $ncampo->columna = 2;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Nitritos";
        $ncampo->leyenda = "";
        $ncampo->datatype = "list";
        $ncampo->defaultdata = "";
        $ncampo->param1 = "+";
        $ncampo->required = null;
        $ncampo->tipo_examen_id = 5;
        $ncampo->columna = 2;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Proteínas";
        $ncampo->leyenda = "";
        $ncampo->datatype = "list";
        $ncampo->defaultdata = "";
        $ncampo->param1 = "Trazas, 30mg/DL,50mg/DL,100mg/DL,500mg/DL";
        $ncampo->required = null;
        $ncampo->tipo_examen_id = 5;
        $ncampo->columna = 2;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Urobilinógeno";
        $ncampo->leyenda = "";
        $ncampo->datatype = "list";
        $ncampo->defaultdata = "";
        $ncampo->param1 = "+,++,+++";
        $ncampo->required = null;
        $ncampo->tipo_examen_id = 5;
        $ncampo->columna = 2;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Examen Microscopico";
        $ncampo->datatype = "titulo";
        $ncampo->tipo_examen_id = 5;
        $ncampo->columna = 1;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Eritrocitos";
        $ncampo->leyenda = "";
        $ncampo->datatype = "text";
        $ncampo->tipo_examen_id = 5;
        $ncampo->required = null;
        $ncampo->columna = 2;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Leucocitos";
        $ncampo->leyenda = "";
        $ncampo->datatype = "text";
        $ncampo->tipo_examen_id = 5;
        $ncampo->required = null;
        $ncampo->columna = 2;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Células Epiteliales";
        $ncampo->leyenda = "";
        $ncampo->datatype = "list";
        $ncampo->defaultdata = "";
        $ncampo->param1 = "+,++,+++";
        $ncampo->required = null;
        $ncampo->tipo_examen_id = 5;
        $ncampo->columna = 2;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Bacterias";
        $ncampo->leyenda = "";
        $ncampo->datatype = "list";
        $ncampo->defaultdata = "";
        $ncampo->param1 = "+,++,+++";
        $ncampo->required = null;
        $ncampo->tipo_examen_id = 5;
        $ncampo->columna = 2;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Mucus";
        $ncampo->leyenda = "";
        $ncampo->datatype = "list";
        $ncampo->defaultdata = "";
        $ncampo->param1 = "+,++";
        $ncampo->required = null;
        $ncampo->tipo_examen_id = 5;
        $ncampo->columna = 2;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Cilindros";
        $ncampo->leyenda = "";
        $ncampo->datatype = "list";
        $ncampo->defaultdata = "";
        $ncampo->param1 = "Hialianos,Leucocitarios,Eritrocitarios,cilindros granulosos";
        $ncampo->required = null;
        $ncampo->tipo_examen_id = 5;
        $ncampo->columna = 2;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Cilindros";
        $ncampo->leyenda = "50/100";
        $ncampo->datatype = "text";
        $ncampo->tipo_examen_id = 5;
        $ncampo->required = null;
        $ncampo->columna = 2;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Levaduras";
        $ncampo->leyenda = "";
        $ncampo->datatype = "list";
        $ncampo->defaultdata = "";
        $ncampo->param1 = "+,++,+++ ";
        $ncampo->required = null;
        $ncampo->tipo_examen_id = 5;
        $ncampo->columna = 2;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Cristales";
        $ncampo->leyenda = "";
        $ncampo->datatype = "list";
        $ncampo->defaultdata = "";
        $ncampo->param1 = "Oxalato de calcio,Ácido Úrico,Tirosina,Uratos de Calcio,Fosfato de Calcio,Carbonatos de Calcio";
        $ncampo->required = null;
        $ncampo->tipo_examen_id = 5;
        $ncampo->columna = 2;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Observaciones";
        $ncampo->datatype = "textarea";
        $ncampo->tipo_examen_id = 5;
        $ncampo->columna = 2;
        $ncampo->save();

        /* Coprología Helicobacter + Sangre Oculta*/

        $ncampo = new Campo();
        $ncampo->name = "COPROLOGIA";
        $ncampo->datatype = "titulo";
        $ncampo->tipo_examen_id = 4;
        $ncampo->columna = 3;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "parasitos";
        $ncampo->datatype = "leyenda";
        $ncampo->param1 = "Examen";
        $ncampo->param2 = "Resultado";
        $ncampo->param3 = "Valor Normal";
        $ncampo->tipo_examen_id = 4;
        $ncampo->columna = 3;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Sangre Oculta";
        $ncampo->leyenda = "";
        $ncampo->datatype = "list";
        $ncampo->defaultdata = "";
        $ncampo->param1 = "Positivo,Negativo";
        $ncampo->required = null;
        $ncampo->tipo_examen_id = 4;
        $ncampo->columna = 3;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Helicobacter Pylori";
        $ncampo->leyenda = "Positivo / Negativo";
        $ncampo->datatype = "list";
        $ncampo->defaultdata = "";
        $ncampo->param1 = "Negativo,Positivo";
        $ncampo->required = null;
        $ncampo->tipo_examen_id = 4;
        $ncampo->columna = 3;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Observaciones";
        $ncampo->datatype = "textarea";
        $ncampo->tipo_examen_id = 4;
        $ncampo->columna = 3;
        $ncampo->save();

        /*Coprología Helicobacter Pylori*/
        $ncampo = new Campo();
        $ncampo->name = "COPROLOGIA";
        $ncampo->datatype = "titulo";
        $ncampo->tipo_examen_id = 3;
        $ncampo->columna = 3;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "parasitos";
        $ncampo->datatype = "leyenda";
        $ncampo->param1 = "Examen";
        $ncampo->param2 = "Resultado";
        $ncampo->param3 = "Valor Normal";
        $ncampo->tipo_examen_id = 3;
        $ncampo->columna = 3;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Helicobacter Pylori";
        $ncampo->leyenda = "Positivo / Negativo";
        $ncampo->datatype = "list";
        $ncampo->defaultdata = "";
        $ncampo->param1 = "Negativo,Positivo";
        $ncampo->required = null;
        $ncampo->tipo_examen_id = 3;
        $ncampo->columna = 3;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Observaciones";
        $ncampo->datatype = "textarea";
        $ncampo->tipo_examen_id = 3;
        $ncampo->columna = 3;
        $ncampo->save();

        /*Coprología Sangre Oculta*/
        $ncampo = new Campo();
        $ncampo->name = "COPROLOGIA";
        $ncampo->datatype = "titulo";
        $ncampo->tipo_examen_id = 2;
        $ncampo->columna = 3;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "parasitos";
        $ncampo->datatype = "leyenda";
        $ncampo->param1 = "Examen";
        $ncampo->param2 = "Resultado";
        $ncampo->param3 = "Valor Normal";
        $ncampo->tipo_examen_id = 2;
        $ncampo->columna = 3;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Helicobacter Pylori";
        $ncampo->leyenda = "Positivo / Negativo";
        $ncampo->datatype = "list";
        $ncampo->defaultdata = "";
        $ncampo->param1 = "Negativo,Positivo";
        $ncampo->required = null;
        $ncampo->tipo_examen_id = 2;
        $ncampo->columna = 3;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Observaciones";
        $ncampo->datatype = "textarea";
        $ncampo->tipo_examen_id = 2;
        $ncampo->columna = 3;
        $ncampo->save();

        /*Coprología Completa*/
        $ncampo = new Campo();
        $ncampo->name = "COPROLOGIA";
        $ncampo->datatype = "titulo";
        $ncampo->tipo_examen_id = 1;
        $ncampo->columna = 2;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Enema Salino";
        $ncampo->leyenda = "";
        $ncampo->datatype = "list";
        $ncampo->defaultdata = "";
        $ncampo->param1 = "X";
        $ncampo->required = null;
        $ncampo->tipo_examen_id = 1;
        $ncampo->columna = 2;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "QUIMICA";
        $ncampo->datatype = "leyenda";
        $ncampo->param1 = "QUIMICA";
        $ncampo->param2 = null;
        $ncampo->param3 = null;
        $ncampo->tipo_examen_id = 1;
        $ncampo->columna = 1;
        $ncampo->save();


        $ncampo = new Campo();
        $ncampo->name = "PH";
        $ncampo->leyenda = "";
        $ncampo->datatype = "listnumber";
        $ncampo->defaultdata = "";
        $ncampo->param1 = "1";
        $ncampo->param2 = "12";
        $ncampo->required = null;
        $ncampo->tipo_examen_id = 1;
        $ncampo->columna = 2;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Heces";
        $ncampo->leyenda = "";
        $ncampo->datatype = "list";
        $ncampo->defaultdata = "";
        $ncampo->param1 = "X";
        $ncampo->required = null;
        $ncampo->tipo_examen_id = 1;
        $ncampo->columna = 2;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "MICROSCOPICO";
        $ncampo->datatype = "leyenda";
        $ncampo->param1 = "MICROSCOPICO";
        $ncampo->param2 = null;
        $ncampo->param3 = null;
        $ncampo->tipo_examen_id = 1;
        $ncampo->columna = 1;
        $ncampo->save();


        $ncampo = new Campo();
        $ncampo->name = "Celulas Vegetales";
        $ncampo->leyenda = "";
        $ncampo->datatype = "list";
        $ncampo->defaultdata = "";
        $ncampo->param1 = "+,++";
        $ncampo->required = null;
        $ncampo->tipo_examen_id = 1;
        $ncampo->columna = 2;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Eritrocitos";
        $ncampo->leyenda = "";
        $ncampo->datatype = "list";
        $ncampo->defaultdata = "";
        $ncampo->param1 = "+,++,+++";
        $ncampo->required = null;
        $ncampo->tipo_examen_id = 1;
        $ncampo->columna = 2;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Almidones";
        $ncampo->leyenda = "";
        $ncampo->datatype = "list";
        $ncampo->defaultdata = "";
        $ncampo->param1 = "+";
        $ncampo->required = null;
        $ncampo->tipo_examen_id = 1;
        $ncampo->columna = 2;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Leucocitos";
        $ncampo->leyenda = "";
        $ncampo->datatype = "list";
        $ncampo->defaultdata = "";
        $ncampo->param1 = "+,++,+++";
        $ncampo->required = null;
        $ncampo->tipo_examen_id = 1;
        $ncampo->columna = 2;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Grasas";
        $ncampo->leyenda = "";
        $ncampo->datatype = "list";
        $ncampo->defaultdata = "";
        $ncampo->param1 = "+,++";
        $ncampo->required = null;
        $ncampo->tipo_examen_id = 1;
        $ncampo->columna = 2;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Bacterias";
        $ncampo->leyenda = "";
        $ncampo->datatype = "list";
        $ncampo->defaultdata = "";
        $ncampo->param1 = "+,++,+++ ";
        $ncampo->required = null;
        $ncampo->tipo_examen_id = 1;
        $ncampo->columna = 2;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Fibras Musculares";
        $ncampo->leyenda = "";
        $ncampo->datatype = "list";
        $ncampo->defaultdata = "";
        $ncampo->param1 = "+,++";
        $ncampo->required = null;
        $ncampo->tipo_examen_id = 1;
        $ncampo->columna = 2;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Levaduras";
        $ncampo->leyenda = "";
        $ncampo->datatype = "list";
        $ncampo->defaultdata = "";
        $ncampo->param1 = "+,++,+++";
        $ncampo->required = null;
        $ncampo->tipo_examen_id = 1;
        $ncampo->columna = 2;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Restos Alimenticios";
        $ncampo->leyenda = "";
        $ncampo->datatype = "list";
        $ncampo->defaultdata = "";
        $ncampo->param1 = "+,++";
        $ncampo->required = null;
        $ncampo->tipo_examen_id = 1;
        $ncampo->columna = 2;
        $ncampo->save();


        $ncampo = new Campo();
        $ncampo->name = "MACROSCOPICO";
        $ncampo->datatype = "leyenda";
        $ncampo->param1 = "MACROSCOPICO";
        $ncampo->param2 = null;
        $ncampo->param3 = null;
        $ncampo->tipo_examen_id = 1;
        $ncampo->columna = 1;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Color";
        $ncampo->leyenda = "";
        $ncampo->datatype = "list";
        $ncampo->defaultdata = "";
        $ncampo->param1 = "Café,amarillo,verde";
        $ncampo->required = null;
        $ncampo->tipo_examen_id = 1;
        $ncampo->columna = 2;
        $ncampo->save();


        $ncampo = new Campo();
        $ncampo->name = "Consistencia";
        $ncampo->leyenda = "";
        $ncampo->datatype = "list";
        $ncampo->defaultdata = "";
        $ncampo->param1 = "Blanda,Semi-blanda,Liquida,Semi-Liquida";
        $ncampo->required = null;
        $ncampo->tipo_examen_id = 1;
        $ncampo->columna = 2;
        $ncampo->save();




        $ncampo = new Campo();
        $ncampo->name = "Sangre";
        $ncampo->leyenda = "";
        $ncampo->datatype = "list";
        $ncampo->defaultdata = "";
        $ncampo->param1 = "+,++,+++";
        $ncampo->required = null;
        $ncampo->tipo_examen_id = 1;
        $ncampo->columna = 2;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Forma";
        $ncampo->leyenda = "";
        $ncampo->datatype = "list";
        $ncampo->defaultdata = "";
        $ncampo->param1 = "Dura,Pastosa";
        $ncampo->required = null;
        $ncampo->tipo_examen_id = 1;
        $ncampo->columna = 2;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Mucus";
        $ncampo->leyenda = "";
        $ncampo->datatype = "list";
        $ncampo->defaultdata = "";
        $ncampo->param1 = "+,++,+++";
        $ncampo->required = null;
        $ncampo->tipo_examen_id = 1;
        $ncampo->columna = 2;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Sangre Oculta";
        $ncampo->leyenda = "";
        $ncampo->datatype = "list";
        $ncampo->defaultdata = "";
        $ncampo->param1 = "Positivo,Negativo";
        $ncampo->required = null;
        $ncampo->tipo_examen_id = 1;
        $ncampo->columna = 2;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Helicobacter Pylori";
        $ncampo->leyenda = "Positivo / Negativo";
        $ncampo->datatype = "list";
        $ncampo->defaultdata = "";
        $ncampo->param1 = "Negativo,Positivo";
        $ncampo->required = null;
        $ncampo->tipo_examen_id = 1;
        $ncampo->columna = 2;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Parasitos";
        $ncampo->datatype = "titulo";
        $ncampo->tipo_examen_id = 1;
        $ncampo->columna = 2;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "parasitos";
        $ncampo->datatype = "leyenda";
        $ncampo->param1 = "Parasitos";
        $ncampo->param2 = "Quistes";
        $ncampo->tipo_examen_id = 1;
        $ncampo->columna = 2;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Etamaeba Histolytica";
        $ncampo->leyenda = "";
        $ncampo->datatype = "list";
        $ncampo->defaultdata = "";
        $ncampo->param1 = "X";
        $ncampo->required = null;
        $ncampo->tipo_examen_id = 1;
        $ncampo->columna = 2;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Giardia Lamblia";
        $ncampo->leyenda = "";
        $ncampo->datatype = "list";
        $ncampo->defaultdata = "";
        $ncampo->param1 = "X";
        $ncampo->required = null;
        $ncampo->tipo_examen_id = 1;
        $ncampo->columna = 2;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Chilomastix Mesnili";
        $ncampo->leyenda = "";
        $ncampo->datatype = "list";
        $ncampo->defaultdata = "";
        $ncampo->param1 = "X";
        $ncampo->required = null;
        $ncampo->tipo_examen_id = 1;
        $ncampo->columna = 2;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Trichomonas Hominis";
        $ncampo->leyenda = "";
        $ncampo->datatype = "list";
        $ncampo->defaultdata = "";
        $ncampo->param1 = "X";
        $ncampo->required = null;
        $ncampo->tipo_examen_id = 1;
        $ncampo->columna = 2;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "parasitos";
        $ncampo->datatype = "leyenda";
        $ncampo->param1 = "Parasitos";
        $ncampo->param2 = "Trofozoitos";
        $ncampo->param3 = "";
        $ncampo->tipo_examen_id = 1;
        $ncampo->columna = 2;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Etamaeba Histolytica";
        $ncampo->leyenda = "";
        $ncampo->datatype = "list";
        $ncampo->defaultdata = "";
        $ncampo->param1 = "X";
        $ncampo->required = null;
        $ncampo->tipo_examen_id = 1;
        $ncampo->columna = 2;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Giardia Lamblia";
        $ncampo->leyenda = "";
        $ncampo->datatype = "list";
        $ncampo->defaultdata = "";
        $ncampo->param1 = "X";
        $ncampo->required = null;
        $ncampo->tipo_examen_id = 1;
        $ncampo->columna = 2;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Chilomastix Mesnili";
        $ncampo->leyenda = "";
        $ncampo->datatype = "list";
        $ncampo->defaultdata = "";
        $ncampo->param1 = "X";
        $ncampo->required = null;
        $ncampo->tipo_examen_id = 1;
        $ncampo->columna = 2;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Trichomonas Hominis";
        $ncampo->leyenda = "";
        $ncampo->datatype = "list";
        $ncampo->defaultdata = "";
        $ncampo->param1 = "X";
        $ncampo->required = null;
        $ncampo->tipo_examen_id = 1;
        $ncampo->columna = 2;
        $ncampo->save();

        $ncampo = new Campo();
        $ncampo->name = "Observaciones";
        $ncampo->datatype = "textarea";
        $ncampo->tipo_examen_id = 1;
        $ncampo->columna = 2;
        $ncampo->save();
    }
}
