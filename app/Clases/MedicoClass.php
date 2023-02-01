<?php
namespace App\Clases;

use App\Models\Examen;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Illuminate\Support\Facades\Mail;

class MedicoClass {
    public $examen;
    public function __construct(){
        $this->examen = new Examen();
    }

    public static function buscar(Examen $examen)
    {
        $bexamen = new MedicoClass();
        $bexamen->examen = $examen;
        return $bexamen;
    }

}

?>

