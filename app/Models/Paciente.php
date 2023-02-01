<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getObtenerEdadAttribute()
    {
        if ($this->fnacimiento == null) {
            return null;
        }
        else{
            $dia=date("d");
            $mes=date("m");
            $ano=date("Y");
            $dianaz=date("d",strtotime($this->fnacimiento));
            $mesnaz=date("m",strtotime($this->fnacimiento));
            $anonaz=date("Y",strtotime($this->fnacimiento));
            //si el mes es el mismo pero el día inferior aun no ha cumplido años, le quitaremos un año al actual
            if (($mesnaz == $mes) && ($dianaz > $dia)) {
            $ano=($ano-1); }
            //si el mes es superior al actual tampoco habrá cumplido años, por eso le quitamos un año al actual
            if ($mesnaz > $mes) {
            $ano=($ano-1);}
            //ya no habría mas condiciones, ahora simplemente restamos los años y mostramos el resultado como su edad
            $edad=($ano-$anonaz);
            return $edad;
        }
    }
}
