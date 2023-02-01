<?php
namespace App\Clases;

use App\Models\Examen;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Illuminate\Support\Facades\Mail;

class UsuarioClass {
    public $examen;
    public function __construct(){
        $this->examen = new Examen();
    }

    public static function buscar(Examen $examen)
    {
        $bexamen = new UsuarioClass();
        $bexamen->examen = $examen;
        return $bexamen;
    }

    public function enviar(){
        if($this->examen->id != null){
            $datos = [];
            $examen = $this->examen;
            foreach ($this->examen->ecdatos as $key => $ecdato) {
                $datos[$ecdato->campo_id] = $ecdato->dato;
            }
            $semail = $examen->medico->email;
            $consultapdf = FacadePdf::loadView('examens.examen_pdf', compact('examen','datos'));
            $consultapdf->setOption(['defaultFont'=>'gothic']);
            Mail::send('examens.asunto_examen_correo', compact('examen'), function ($mail) use ($consultapdf,$semail,$examen) {
                $email = $semail;
                $mail->to([$email]);
                $mail->subject("Sanatorio-".$examen->texamen->name."-".$examen->paciente->lastname."-".$examen->paciente->firstname);
                $mail->attachData($consultapdf->output(), 'sanatorio.pdf');
            });
            return true;
        }
        else {return false;}
    }

    public function descargar_examen(){
        if($this->examen->id != null){
            $datos = [];
            $examen = $this->examen;
            foreach ($this->examen->ecdatos as $key => $ecdato) {
                $datos[$ecdato->campo_id] = $ecdato->dato;
            }
        $consultapdf = FacadePdf::loadView('examens.examen_pdf', compact('examen','datos'));
        $consultapdf->setOption(['defaultFont'=>'gothic'])->setPaper([0, 0,612,792]);
        $pdfContent = $consultapdf->output();
        $resultado = response()->streamDownload(
            fn () => print($pdfContent),
            $this->examen->paciente->firstname." ".$this->examen->paciente->lastname."-".$this->examen->texamen->name."-".$this->examen->fregistro.'.pdf'
            ,[
                'Content-Type' => 'application/pdf',
                'Content-Disposition' =>  'inline; filename="invoice.pdf"',
            ]
        );
        return $resultado;
        }
        else {return false;}
    }

    public function descargar_receta(){
        if($this->receta->id != null){
        $receta =$this->receta;
        $consultapdf = FacadePdf::loadView('recetas.receta_pdf', compact('receta'));
        $consultapdf->setOption(['defaultFont'=>'gothic'])->setPaper([0, 0,595,368]);
        $pdfContent = $consultapdf->output();
        $resultado = response()->streamDownload(
            fn () => print($pdfContent),
            $this->receta->paciente->firstname." ".$this->receta->paciente->lastname."-".$this->receta->id.".pdf",
            [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' =>  'inline; filename="invoice.pdf"',
            ]
        );
        return $resultado;
        }
        else {return false;}
    }
}

?>

