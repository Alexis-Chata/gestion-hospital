<?php

namespace App\Http\Livewire;

use App\Models\Categoria;
use Livewire\Component;

class GestionarExamenes extends Component
{
    public $seleccionar_texamen = null;
    public function seleccionar_texamen($texamen){
        $this->seleccionar_texamen = $texamen;
        $this->emitTo('lista-examen','actualizar_examen',$texamen);
    }
    public function render()
    {
        $categorias = Categoria::all();
        return view('livewire.gestionar-examenes',compact('categorias'));
    }
}
