<?php
namespace App\Clases;

use App\Models\Examen;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Illuminate\Support\Facades\Mail;

class OperativoClass {
    public $examen;
    public function __construct(){
        $this->examen = new Examen();
    }

    public static function buscar(Examen $examen)
    {
        $bexamen = new OperativoClass();
        $bexamen->examen = $examen;
        return $bexamen;
    }

}

?>

