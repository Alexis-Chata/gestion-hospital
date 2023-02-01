<?php

namespace App\Http\Livewire;

use App\Models\Paciente;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class ListadoPacientes extends Component
{
    use WithPagination;
    public $bpaciente;
    public $bfecha;
    public $n_pagina = 5;
    public $spaciente;
    protected $paginationTheme = 'bootstrap';


    public function ver_detalles(Paciente $paciente)
    {
        $this->spaciente = $paciente;
        $this->emit('actualizar_paciente',$this->spaciente);
    }
    public function updatedBpaciente($name)
    {
        $this->resetPage();
    }

    public function render()
    {
        $pacientes = Paciente::Where(function($query) {
            $query->where('firstname','like','%' . $this->bpaciente.'%')
                ->orwhere('lastname','like','%' . $this->bpaciente.'%')
                ->orWhere(DB::raw("CONCAT(pacientes.firstname,' ',pacientes.lastname,' ')"), 'like', '%' . $this->bpaciente.'%')
                ->orWhere('celular', 'like', '%' . $this->bpaciente.'%')
                ->orWhere('telefono', 'like', '%' . $this->bpaciente.'%');
        })->paginate($this->n_pagina);

        return view('livewire.listado-pacientes',compact('pacientes'));
    }
}
