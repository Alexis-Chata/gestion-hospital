<?php

namespace App\Http\Livewire;

use App\Clases\AdministradorClass;
use App\Models\Medico;
use App\Models\TipoUsuario;
use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use Spatie\Permission\Models\Role;

class GestionarUsuarios extends Component
{
    use WithPagination;
    use WithFileUploads;
    protected $paginationTheme = 'bootstrap';
    public User $user;
    public Medico $medico;
    public $user_password;
    public $n_pagina = 5;
    public $search;
    public $roles2 = [];
    public $tipoUsuario = [];
    protected $queryString = [
        'search' => ['except' => ''],
        'page' => ['except' => 1],
    ];
    #propiedades del modal
    public $modal_titulo;
    #escuchador
    protected $listeners = ['eliminar','reiniciar'];

    protected $rules = [
        'user.username' => 'required:users,username|string|min:6',
        'user.firstname' => 'required|string',
        'user.lastname' => 'required|string',
        'user.email' => 'unique:users,email|required|email',
        'user.genero' => 'required',
        'medico.colegiatura' => '',
        'medico.universidad' => '',
        'medico.carrera' => '',
        'medico.especialidad' => '',
        'user_password' => 'required',
    ];

    protected $validationAttributes = [
        'user.username' => 'usuario',
        'user.email' => 'Correo Electronico',
        'user.firstname' => 'Nombres',
        'user.lastname' => 'Apellidos',
        'user_password' => 'Contraseña',
    ];

    #repaginar
    public function updatingSearch()
    {
        $this->resetPage();
    }
    #validar
    public function validando($id){
        $this->validate([
            'user.username' => 'required|string|min:6|unique:users,username,'.$id,
            'user.firstname' => 'required|string|min:4',
            'user.lastname' => 'required|string|min:4',
            'user.email' => 'required|email|unique:users,email,'.$id,
        ]);
    }

    public function modal( $titulo,  $user = 'Crear' ){
        $this->reset('roles2','user_password', 'tipoUsuario');
        if($user == 'Crear')
        {
            $this->user = new User();
            $this->medico = new Medico();
        }
        else
        {
            $this->user = User::with('medico')->find($user);
            $this->medico = $this->user->medico ?? new Medico();
            $this->roles2 = $this->user->getRoleNames()->toArray();
            $this->tipoUsuario = AdministradorClass::tipo_usuario($this->user);
        }
        $this->modal_titulo = $titulo;
    }

    public function save()
    {
        if ($this->modal_titulo == 'Modificar'){
            $this->validando($this->user->id);
            list($this->user, $this->medico) = AdministradorClass::usuario_asignar_roles_datos_medico($this->user, $this->roles2, $this->tipoUsuario, $this->medico);
            $this->modal_titulo = "Modifico";
        }elseif($this->modal_titulo == 'Crear') {
            $this->validate();
            list($this->user, $this->medico) = AdministradorClass::usuario_asignar_roles_datos_medico($this->user, $this->roles2, $this->tipoUsuario, $this->medico, $this->user_password);
            $this->modal_titulo = "Creo";
        }
            $this->emit('notificar_creacion',$this->modal_titulo);
    }

    public function eliminar(User $user){
            if($user->examens->count() == 0){
                $user->estado = 0;
                $user->save();
                $mensaje = "Se elimino el usuario correctamente.";
            }else {
                $mensaje = "No se pudo eliminar al usuario tiene examenes asignados";
            }
            $this->emit('notificar_eliminacion',$mensaje);
    }

    public function render(){
        return view('livewire.gestionar-usuarios',[
            'users'=> User::Where(function($query) {
                $query->Where('firstname','like','%'.$this->search.'%')
                        ->orWhere('email','like','%'.$this->search.'%');
                })->whereNotIn('id', [1])->paginate($this->n_pagina),
            'roles' => Role::all(),
            'tipo_usuarios' => TipoUsuario::all(),
        ]);
    }

    public function reiniciar(User $user){
        AdministradorClass::reiniciar_password($user);
    }
}
