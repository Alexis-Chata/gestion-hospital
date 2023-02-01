<div>
    <div class="row">
        <div class="col-12">
            <div class="card mb-4" style="background-color: #6c757d;">
                <div class="card-header pb-3">
                    <div class="row align-items-center">
                        <div class="col-6 text-center">
                            <h6 class="fs-5">Lista de Usuarios</h6>
                        </div>
                        <div class="col-6 text-center">
                            <button class="btn btn-primary" id="crear_usuario" data-bs-toggle="modal"
                                data-bs-target="#usuario_modal" wire:click="modal('Crear')"><i class="fas fa-user"></i>
                                Crear Usuario</button>
                            <!-- Modal -->
                            <div wire:ignore.self class="modal fade" id="usuario_modal" tabindex="-1"
                                aria-labelledby="usuarioModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="usuarioModalLabel">{{ $modal_titulo }} - Usuario
                                            </h5>
                                            <button type="button" id="cerrar_usuario_modal" class="btn-close"
                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="container">
                                                <div class="col-12 p-4">
                                                    @if ($user)
                                                        <div class="row">
                                                            <div class="mb-3 col-12" style="text-align: left;">
                                                                <label for="tipoUsuario"
                                                                    class="form-label">Tipo de Usuario : </strong></label><br>
                                                                <!--role-->
                                                                @foreach ($tipo_usuarios as $tipo_usuario)
                                                                    @if ($tipo_usuario->name == 'Admin')
                                                                    @else
                                                                        {{ $tipo_usuario->name }} : <input type="checkbox"
                                                                            class="mr-1" wire:model='tipoUsuario'
                                                                            value="{{ $tipo_usuario->id }}"><br>
                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    @endif
                                                    <div class="row">
                                                        <div class="col-12" style="text-align: left;">
                                                            <label for="user_name" class="fw-bold">Usuario : <span
                                                                    class="text-danger">(*)</span></label>
                                                            <input type="text" id="user_name" class="form-control"
                                                                wire:model="user.username">
                                                            @error('user.username')
                                                                <div class="p-1"> {{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="col-12" style="text-align: left;">
                                                            <label for="user_name" class="fw-bold">Nombres : <span
                                                                    class="text-danger">(*)</span></label>
                                                            <input type="text" id="firts_name" class="form-control"
                                                                wire:model="user.firstname">
                                                            @error('user.firstname')
                                                                <div class="p-1"> {{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="col-12" style="text-align: left;">
                                                            <label for="user_name" class="fw-bold">Apellidos : <span
                                                                    class="text-danger">(*)</span></label>
                                                            <input type="text" id="last_name" class="form-control"
                                                                wire:model="user.lastname">
                                                            @error('user.lastname')
                                                                <div class="p-1"> {{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="usuario_genero" id="genero_hombre"
                                                                    wire:model="user.genero" value='0'>
                                                                <label class="form-check-label" for="genero_hombre">
                                                                    Hombre
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="usuario_genero" id="genero_mujer"
                                                                    wire:model="user.genero" value="1">
                                                                <label class="form-check-label" for="genero_mujer">
                                                                    Mujer
                                                                </label>
                                                            </div>
                                                            @error('user.genero')
                                                                <div class="p-1"> {{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="col-12" style="text-align: left;">
                                                            <label for="user_email" class="fw-bold">Email : <span
                                                                    class="text-danger">(*)</span></label>
                                                            <input type="text" id="user_email" class="form-control"
                                                                wire:model="user.email">
                                                            @error('user.email')
                                                                <div class="p-1"> {{ $message }}</div>
                                                            @enderror
                                                        </div>

                                                        @if(in_array(2, $this->tipoUsuario))
                                                        <div class="col-12 text-center mt-3">
                                                            Datos del Medico
                                                            <hr>
                                                        </div>
                                                        <div class="col-12" style="text-align: left;">
                                                            <label for="medico_universidad" class="fw-bold">Universidad :
                                                            </label>
                                                            <input type="text" id="medico_universidad"
                                                                class="form-control" wire:model="medico.universidad">
                                                            @error('medico.universidad')
                                                                <div class="p-1"> {{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="col-12" style="text-align: left;">
                                                            <label for="medico_carrera" class="fw-bold">Carrera :
                                                                </label>
                                                            <input type="text" id="medico_carrera"
                                                                class="form-control" wire:model="medico.carrera">
                                                            @error('medico.carrera')
                                                                <div class="p-1"> {{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="col-12" style="text-align: left;">
                                                            <label for="medico_especialidad"
                                                                class="fw-bold">Especialidad : </label>
                                                            <input type="text" id="medico_especialidad"
                                                                class="form-control" wire:model="medico.especialidad">
                                                            @error('medico.especialidad')
                                                                <div class="p-1"> {{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="col-12" style="text-align: left;">
                                                            <label for="medico_colegiatura" class="fw-bold">Colegiatura
                                                                :</label>
                                                            <input type="text" id="medico_especialidad"
                                                                class="form-control" wire:model="medico.colegiatura">
                                                            @error('medico.colegiatura')
                                                                <div class="p-1"> {{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        @endif

                                                        @if ($modal_titulo == 'Crear')
                                                            <div class="col-12" style="text-align: left;">
                                                                <label for="user_password" class="fw-bold">Contraseña
                                                                    : <span class="text-danger">(*)</span></label>
                                                                <input type="password" id="user_password"
                                                                    class="form-control" wire:model="user_password">
                                                                @error('user_password')
                                                                    <div class="p-1"> {{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        @endif
                                                    </div>
                                                    @if ($user)
                                                        <div class="row">
                                                            <div class="mb-3 col-12" style="text-align: left;">
                                                                <label for="roles2"
                                                                    class="form-label">Roles : </strong></label><br>
                                                                <!--role-->
                                                                @foreach ($roles as $role)
                                                                    @if ($role->name == 'Admin')
                                                                    @else
                                                                        {{ $role->name }} : <input type="checkbox"
                                                                            class="mr-1" wire:model='roles2'
                                                                            value="{{ $role->name }}"><br>
                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary"
                                                wire:target="perfil_imagen, save" wire:click="save"
                                                wire:loading.attr="disabled">{{ $modal_titulo }} Usuario</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="container mt-4">
                        <div class="row">
                            <div class="col-10">
                                <input wire:model="search" type="search" class="form-control"
                                    placeholder="Buscar Usuario por nombre...">
                            </div>
                            <div class="col-2">
                                <select class="form-select" wire:model="n_pagina">
                                    <option value="5">5</option>
                                    <option value="10">10</option>
                                    <option value="{{ $users->total() }}">Todo</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div id="Tabla usuario" class="container mt-4 table-responsive">
                        <table class="table">
                            <thead class="table table-dark">
                                <tr>
                                    <th class="text-center">N°</th>
                                    <th class="text-center">Nombres</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">Examenes</th>
                                    <th class="text-center">Acciones</th>
                                </tr>
                            </thead>
                            <tbody class="table-secondary">
                                @foreach ($users as $key => $usuario)
                                    @if ($usuario->id == 1)
                                    @else
                                        <tr>
                                            <td class="text-center">{{ $key + 1 }}</td>
                                            <td class="text-center">{{ $usuario->firstname }}</td>
                                            <td class="text-center">{{ $usuario->email }}</td>
                                            <td class="text-center">
                                                {{ $usuario->examens ? $usuario->examens->count() : 0 }}</td>
                                            <td class="text-center">
                                                <button class="btn btn-dark" id="reiniciar-{{ $usuario->id }}"
                                                    wire:click="$emit('reiniciar_usuario',{{ $usuario->id }})"><i
                                                        class="fas fa-circle-notch"></i></button>
                                                <button class="btn btn-success" id="editar-{{ $usuario->id }}"
                                                    data-bs-toggle="modal" data-bs-target="#usuario_modal"
                                                    wire:click="modal('Modificar', {{ $usuario->id }})"><i
                                                        class="fas fa-edit"></i></button>
                                                <button class="btn btn-danger" id="eliminar-{{ $usuario->id }}"
                                                    wire:click="$emit('eliminar_usuario',{{ $usuario->id }})"><i
                                                        class="fas fa-trash"></i></button>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                        <div>
                            {{ $users->links() }} <div class="fs-4 fw-bold text-white">Total : {{ $users->count() }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
