<?php

namespace App\Http\Livewire;

use App\Models\Campo;
use App\Models\Categoria;
use App\Models\Examen;
use App\Models\ExamenDetalle;
use App\Models\Paciente;
use App\Models\TipoExamen;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class GestionarPacientes extends Component
{
    public $titulo_paciente_accion = "Crear";
    public $titulo_examen_accion = "Crear";
    public $resultado_paciente;
    public $editar_examen;
    public Paciente $paciente;
    public $paciente_consulta;
    public $bpaciente;
    public $n_pagina = 5;
    public $scategoria, $ltexamens, $stexamen, $ecampos, $dtexamen;
    //datos del examen
    public $efregistro, $emedico;
    //esto es una prueb
    protected $listeners = ['eliminar_examen', 'eliminar_paciente', 'ver_examenes', 'modal_paciente_examen'];
    //campos examenes de pacientes
    public $datos = [];
    protected $paginationTheme = 'bootstrap';
    use WithPagination;

    protected $rules = [
        'paciente.firstname' => 'required',
        'paciente.lastname' => 'required',
        'paciente.genero' => 'required',
        'paciente.direccion' => 'required',
        'paciente.celular' => 'required',
        'paciente.telefono' => '',
        'paciente.telefono2' => '',
        'paciente.email' => '',
        'paciente.fnacimiento' => '',
    ];
    public $rule_examengeneral = [
        'efregistro' => 'required',
        'emedico' => 'required',
        'scategoria' => 'required',
        'stexamen' => 'required',
    ];

    public function validar_examen_especifico(TipoExamen $texamen)
    {
        $regla_expecifico = [];

        foreach ($texamen->campos as $key => $campo) {
            if ($campo->required == 1) {
                $regla_expecifico['datos.' . $campo->id] = 'required';
            } else {
                $regla_expecifico['datos.' . $campo->id] = '';
            }
        }
        return $regla_expecifico;
    }

    protected $validationAttributes = [
        'paciente.firstname' => 'Nombres',
        'paciente.lastname' => 'Apellidos',
        'paciente.genero' => 'Genero',
        'paciente.direccion' => 'Dirección',
        'paciente.edad' => 'Edad',
        'paciente.celular' => 'Celular',
        'paciente.telefono' => 'Telefono',
        'paciente.telefono2' => 'Otro Telefono',
    ];

    public function mount()
    {
        $this->paciente = new Paciente();
        $this->paciente->genero = 0;
        $this->reset('titulo_paciente_accion');
    }

    public function updated($name, $value)
    {
        $this->reset('resultado_paciente');
    }

    public function updatedBpaciente($name)
    {
        $this->resetPage();
    }

    public function updatedScategoria($name)
    {
        if ($this->scategoria != null) {
            $this->ltexamens = TipoExamen::where('categoria_id', $this->scategoria)->get();
        } else {
            $this->ltexamens = null;
        }
    }

    public function updatedStexamen($name)
    {
        $this->reset('datos');
        if ($this->stexamen != null) {
            $this->dtexamen = TipoExamen::find($this->stexamen);
            foreach ($this->dtexamen->campos as $key => $campo) {
                $this->datos[$campo->id] = null;
            }
            $this->ecampos = Campo::where('texamen_id', $this->stexamen)->get();
        } else {
            $this->dtexamen = null;
            $this->ecampos = null;
            $this->reset('datos');
        }
        $this->efregistro = date('Y-m-d');
    }

    public function modal_paciente_examen($accion_paciente_examen = null, $examen_id = null)
    {
        if ($accion_paciente_examen == 'editar') {
            $this->titulo_examen_accion = "Editar";
            $this->editar_examen = $examen_id;
            $s_examen = Examen::find($examen_id);
            //rellenar datos del examen general
            $this->scategoria = $s_examen->texamen->categoria->id;
            $this->updatedScategoria('okey');
            $this->stexamen = $s_examen->texamen->id;
            $this->updatedStexamen('okey');
            $this->efregistro = $s_examen->fregistro;
            $this->emedico = $s_examen->medico_id;
            //rellenar datos especificos del examen
            foreach ($s_examen->ecdatos as $key => $ecdato) {
                $this->datos[$ecdato->campo_id] = $ecdato->dato;
            }
        } else {
            $this->titulo_examen_accion = "Crear";
            $this->reset('editar_examen', 'efregistro', 'emedico', 'datos', 'scategoria', 'stexamen');
        }
        $this->emit('notificar_examen_paciente');
    }

    public function ver_examenes($paciente_id)
    {
        $this->paciente_consulta = Paciente::find($paciente_id);
    }

    public function modal_paciente($accion_paciente = null, $paciente_id = null)
    {
        if ($accion_paciente == 'editar') {
            $this->titulo_paciente_accion = "Modificar";
            $this->paciente = Paciente::find($paciente_id);
            $this->emit('notificar_formulario_paciente');
        } else {
            $this->mount();
        }
    }

    public function save_paciente()
    {
        $this->validate();
        $this->paciente->save();
        $this->resultado_paciente = "Se creo el Paciente Correctamente";
        $this->emit('notificar_listado_paciente');
        $this->mount();
    }

    public function crear_modificar_examen()
    {
        $this->validate($this->rule_examengeneral);
        $this->validate($this->validar_examen_especifico($this->dtexamen));

        //registrar examen
        if ($this->editar_examen == null) {
            $nexamen = new Examen();
        } elseif ($this->editar_examen != null) {
            $nexamen = Examen::find($this->editar_examen);
        }

        $nexamen->fregistro = $this->efregistro;
        $nexamen->medico_id = $this->emedico;
        $nexamen->paciente_id = $this->paciente_consulta->id;
        $nexamen->texamen_id = $this->stexamen;
        $nexamen->save();

        /*Registrar datos del examen*/
        if ($this->editar_examen == null) {
            foreach ($this->datos as $key => $dato) {
                $necdatos = new ExamenDetalle();
                $necdatos->examen_id = $nexamen->id;
                $necdatos->campo_id = $key;
                $necdatos->dato = $dato;
                $necdatos->save();
            }
        } elseif ($this->editar_examen != null) {
            foreach ($this->datos as $key => $dato) {
                $necdatos = ExamenDetalle::where('examen_id', $this->editar_examen)->where('campo_id', $key)->first();
                $necdatos->dato = $dato;
                $necdatos->save();
            }
        }
        $gexamen = ExamenClass::buscar($nexamen);
        #enviar mensaje
        $gexamen->enviar();
        #descargar examen
        $this->ver_examenes($this->paciente_consulta->id);
        $this->reset('datos', 'editar_examen', 'titulo_examen_accion');
        $this->emit('notificar_listado_paciente');
        return $gexamen->descargar_examen();
    }

    public function eliminar_examen(Examen $examen)
    {
        $paciente_id = $examen->paciente->id;
        $examen->delete();
        $this->ver_examenes($paciente_id);
        $this->emit('notificar_eliminar_examen', 'Se elimino correctamente');
    }

    public function eliminar_paciente(Paciente $paciente)
    {
        if ($paciente->examens->count() == 0) {
            $paciente->delete();
            $this->mount();
            $this->reset('titulo_paciente_accion');
            $this->emit('notificar_eliminar_paciente', 'Se elimino correctamente');
        } else {
            $this->emit('notificar_eliminar_examen', 'no se pudo eliminar por que tiene examenes registrados');
        }
    }

    public function reenviar(Examen $examen)
    {

        $s_examen = ExamenClass::buscar($examen);
        if ($examen->medico->email != null) {
            $s_examen->enviar($examen->medico->email);
        }
    }

    public function render()
    {
        $lcategorias = Categoria::all();
        $lmedicos = User::role('Medico')->get();
        $lpacientes = Paciente::Where(function ($query) {
            $query->where('firstname', 'like', '%' . $this->bpaciente . '%')
                ->orwhere('lastname', 'like', '%' . $this->bpaciente . '%')
                ->orWhere(DB::raw("CONCAT(pacientes.firstname,' ',pacientes.lastname,' ')"), 'like', '%' . $this->bpaciente . '%')
                ->orWhere('celular', 'like', '%' . $this->bpaciente . '%')
                ->orWhere('telefono', 'like', '%' . $this->bpaciente . '%');
        })->paginate($this->n_pagina);

        return view('livewire.gestionar-pacientes', compact('lpacientes', 'lcategorias', 'lmedicos'));
    }
}
