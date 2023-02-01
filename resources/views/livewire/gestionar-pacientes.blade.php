<div id="gpacientes" class="text-end">
    <button type="button" class="btn btn-success" id="ventana_gestionar_pacientes" data-bs-toggle="modal" data-bs-target="#modal_gestionar_pacientes" wire:click="$emit('notificar_listado_paciente')" >
        <i class="ni ni-single-02"></i> Gestionar Paciente
    </button>
    <!--ventana modal-->
    <div wire:ignore.self class="modal fade" id="modal_gestionar_pacientes" tabindex="100" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #2dce89;">
                    <h5 class="modal-title" id="exampleModalLabel" style="color: white;">Gestionar Pacientes</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <!--gestionar pacientes--->
                        <div class="card card-secondary my-4">
                            <div class="card-body p-inherit table-responsive">
                                <div class="row">
                                    <div class="col-12">
                                        <ul class="nav nav-tabs nav-fill" role="tablist" id="listado-abc">
                                            <li class="nav-item">
                                                <a wire:ignore.self class="nav-link active" data-toggle="tab" href="#tasks2c" role="tab" aria-controls="tasks2c" aria-selected="true" id="1_pestana_s">{{$titulo_paciente_accion}} Paciente </a>
                                            </li>
                                            <li class="nav-item">
                                                <a  wire:ignore.self class="nav-link" data-toggle="tab" href="#files2c" role="tab" aria-controls="files2c" aria-selected="false" id="1_listado_s">Lista de Pacientes</a>
                                            </li>
                                            @if (isset($paciente_consulta->id))
                                            <li class="nav-item">
                                                <a  wire:ignore.self class="nav-link" data-toggle="tab" href="#files2d" role="tab" aria-controls="files2d" aria-selected="false" id="1_examen_s">{{$titulo_examen_accion}} Examenes</a>
                                            </li>
                                            @endif
                                        </ul>
                                    </div>
                                    <div class="col-12 mt-3">
                                        <div class="tab-content" >
                                            <div wire:ignore.self class="tab-pane fade active show" id="tasks2c" role="tabpanel" data-filter-list="card-list-body">
                                                <div class="content-list">
                                                    <div class="main p-2">
                                                        <div class="row" style="text-align: left;">.
                                                            @if ($resultado_paciente == true)
                                                            <div class="alert alert-success text-white alert-dismissible fade show" role="alert">
                                                                {{$resultado_paciente}}
                                                                <button type="button" class="btn-close text-white" data-bs-dismiss="alert" aria-label="Close">X</button>
                                                            </div>
                                                            @endif
                                                            <div class="col-12 ">
                                                                <label for="paciente_firstname" class="fw-bold">Nombre : <span class="text-danger">(*)</span></label>
                                                                <input type="text" id="paciente_firstname" class="form-control" wire:model="paciente.firstname">
                                                                @error('paciente.firstname')
                                                                    <div class="p-1"> {{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="paciente_lastname" class="fw-bold">Apellidos : <span class="text-danger">(*)</span></label>
                                                                <input type="text" id="paciente_lastname" class="form-control" wire:model="paciente.lastname">
                                                                @error('paciente.lastname')
                                                                    <div class="p-1"> {{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="f_nacimiento" class="fw-bold">Fecha Nacimiento : <span class="text-danger">(*)</span></label>
                                                                <input type="date" id="f_nacimiento" class="form-control" wire:model="paciente.fnacimiento">
                                                                @error('paciente.fnacimiento')
                                                                    <div class="p-1"> {{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="paciente_email" class="fw-bold">Email : </span></label>
                                                                <input type="text" id="paciente_email" class="form-control" wire:model="paciente.email">
                                                                @error('paciente.email')
                                                                    <div class="p-1"> {{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="paciente_genero" id="genero_hombre" wire:model="paciente.genero" value='0'>
                                                                    <label class="form-check-label" for="genero_hombre">
                                                                      Hombre
                                                                    </label>
                                                                  </div>
                                                                  <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="paciente_genero" id="genero_mujer" wire:model="paciente.genero" value="1">
                                                                    <label class="form-check-label" for="genero_mujer">
                                                                      Mujer
                                                                    </label>
                                                                  </div>
                                                                  @error('paciente.genero')
                                                                    <div class="p-1"> {{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="paciente_direccion" class="fw-bold">Dirección : </label>
                                                                <input type="text" id="paciente_direccion" class="form-control" wire:model="paciente.direccion">
                                                                @error('paciente.direccion')
                                                                    <div class="p-1"> {{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="paciente_celular" class="fw-bold">Celular : </label>
                                                                <input type="text" id="paciente_celular" class="form-control" wire:model="paciente.celular">
                                                                @error('paciente.celular')
                                                                    <div class="p-1"> {{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="paciente_telefono" class="fw-bold">Telefono :</label>
                                                                <input type="text" id="paciente_telefono" class="form-control" wire:model="paciente.telefono">
                                                                @error('paciente.telefono')
                                                                    <div class="p-1"> {{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="paciente_telefono2" class="fw-bold">Otro Telefono : </label>
                                                                <input type="text" id="paciente_telefono2" class="form-control" wire:model="paciente.telefono2">
                                                                @error('paciente.telefono2')
                                                                    <div class="p-1"> {{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                            <div class="col-12 mt-2">
                                                                <button class="btn btn-primary" wire:target="save" wire:loading.attr="disabled" wire:click="save_paciente">{{$titulo_paciente_accion}} Paciente</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div wire:ignore.self class="tab-pane fade" id="files2c" role="tabpanel" data-filter-list="card-list-body">
                                                <div class="content-list">
                                                    <div class="row my-3">
                                                        <div class="col-8" style="text-align: left;">
                                                            <label for="bpaciente" class="fw-bold">Buscar Paciente :
                                                            </label>
                                                            <input type="bpaciente" class="form-control" name="" id="bpaciente" wire:model="bpaciente">
                                                        </div>
                                                        <div class="col-4" style="text-align: left;">
                                                            <label for="n_pagina">Paginación</label>
                                                            <select class="form-select" wire:model="n_pagina">
                                                                <option value="5">5</option>
                                                                <option value="10">10</option>
                                                                <option value="{{$lpacientes->total()}}">Todo</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col table-responsive">
                                                            <table class="table table-dark">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Id</th>
                                                                        <th>Nombres</th>
                                                                        <th>Apellidos</th>
                                                                        <th>Edad</th>
                                                                        <th>Celular</th>
                                                                        <th>Tel. 1</th>
                                                                        <th>Dirección</th>
                                                                        <th>Acciones</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody class="table table-secondary">
                                                                    @foreach ($lpacientes as $lpaciente)
                                                                    <tr>
                                                                        <td class="text-center"><button class="btn text-white" style="background-color: #0d6efd;" wire:click="ver_examenes({{$lpaciente->id}})"><i class="fas fa-plus"></i></button></td>
                                                                        <td style="text-align: center;">{{$lpaciente->firstname}}</td>
                                                                        <td style="text-align: center;">{{$lpaciente->lastname}}</td>
                                                                        @if ($lpaciente->obtener_edad == null)
                                                                        <td class="text-center">{{$lpaciente->edad}}</td>
                                                                        @else
                                                                        <td class="text-center">{{$lpaciente->obtener_edad}}</td>
                                                                        @endif
                                                                        <td class="text-center">{{$lpaciente->celular}}</td>
                                                                        <td class="text-center">{{$lpaciente->telefono}}</td>
                                                                        <td style="text-align: center;">{{$lpaciente->direccion}}</td>
                                                                        <td style="text-align: center;">

                                                                            <button class="btn text-white" style="background-color: #2dce89;" wire:click="modal_paciente('editar',{{$lpaciente->id}})"><i class="fas fa-edit"></i></button>
                                                                            <button class="btn text-white" style="background-color: #fb6340;" wire:click="$emit('eliminarpaciente',{{$lpaciente->id}})"><i class="fas fa-trash"></i></button>
                                                                        </td>
                                                                    </tr>
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                   </div>
                                                   <div class="row mt-3">
                                                        <div id="col">
                                                            {{$lpacientes->links()}}
                                                        </div>
                                                   </div>
                                                   @if (isset($paciente_consulta->id))
                                                    <div class="row">
                                                            <div class="card card-secondary my-1">
                                                                <div class="card-header row align-items-center" style="background-color: #344767">
                                                                    <div class="col-8 text-center  text-white fs-5">{{$paciente_consulta->firstname." ".$paciente_consulta->lastname}}</div>
                                                                    <div class="col-4"><button class="btn btn-primary" wire:click="modal_paciente_examen()"><i class="fas fa-plus"></i> Agregar Examen</button></div>
                                                                </div>
                                                            </div>
                                                            <div class="card-body p-inherit table-responsive" style="background-color: #779bca">
                                                                <div class="row">
                                                                    @if ($paciente_consulta->examens->count() != 0)
                                                                    <div class="col">
                                                                        <table class="table table-dark">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th class="text-center">Codigo</th>
                                                                                    <th class="text-center">Tipo de Examen</th>
                                                                                    <th class="text-center">Doctor</th>
                                                                                    <th class="text-center">Fecha Examen</th>
                                                                                    <th class="text-center">Acciones</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody class="table table-secondary">
                                                                                @foreach ($paciente_consulta->examens as $examen)
                                                                                <tr>
                                                                                    <td class="text-center">{{$examen->id}}</td>
                                                                                    <td class="text-center">{{$examen->texamen->name}}</td>
                                                                                    <td class="text-center">{{$examen->medico->firstname." ".$examen->medico->firstname}}</td>
                                                                                    <td class="text-center">{{$examen->fregistro}}</td>
                                                                                    <td class="text-center">
                                                                                        <button class="btn text-white" style="background-color: red;" wire:loading.attr="disabled" wire:target="reenviar" wire:click="reenviar('{{ $examen->id }}')"><i class="fas fa-envelope"></i></button>
                                                                                        <button class="btn text-white" style="background-color: #2dce89;" wire:click="modal_paciente_examen('editar',{{$examen->id}})"><i class="fas fa-edit"></i></button>
                                                                                        <button class="btn text-white" style="background-color: #fb6340;" wire:click="$emit('eliminarexamen',{{$examen->id}})"><i class="fas fa-trash"></i></button>
                                                                                    </td>
                                                                                </tr>
                                                                                @endforeach
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    @else
                                                                    <div class="col-12 text-center">El paciente no tiene examenes registrados.</div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="card-footer" style="background-color: #779bca">
                                                            </div>
                                                    </div>
                                                   @endif
                                                </div>
                                            </div>
                                            <div wire:ignore.self class="tab-pane fade" id="files2d" role="tabpanel" data-filter-list="card-list-body">
                                                <div class="content-list">
                                                   <!--datos del paciente-->
                                                    <div class="row">
                                                        <div class="col-12 text-center fs-4">{{$paciente->firstname." ".$paciente->lastname}}</div>
                                                   </div>
                                                   <!--elegir el tipo de examen a crear -->
                                                   <div class="row">
                                                        @if ($editar_examen == null)
                                                            <div class="col-6" style="text-align: left;">
                                                                <label for="scategoria" class="fw-bold">Elegir la categoria :
                                                                </label>
                                                                <select id="scategoria" wire:model="scategoria" class="form-select">
                                                                    <option value="">Elegir</option>
                                                                    @foreach ($lcategorias as $lcategoria)
                                                                    <option value="{{$lcategoria->id}}">{{$lcategoria->name}}</option>
                                                                    @endforeach
                                                                </select>
                                                                @error('scategoria')
                                                                    <div class="p-1"> {{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                            @if ($scategoria != null)
                                                            <div class="col-6" style="text-align: left;">
                                                                <label for="stexamen" class="fw-bold text-center">Elegir El tipo de Examen :
                                                                </label>
                                                                <select id="stexamen" wire:model="stexamen" class="form-select">
                                                                    <option value="">Elegir</option>
                                                                    @foreach ($ltexamens as $ltexamen)
                                                                    <option value="{{$ltexamen->id}}">{{$ltexamen->name}}</option>
                                                                    @endforeach
                                                                </select>
                                                                @error('stexamen')
                                                                    <div class="p-1"> {{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                            @endif
                                                        @elseif($editar_examen != null)
                                                            <div class="col-6" style="text-align: center;">
                                                                Categoria : {{$this->dtexamen->categoria->name}}
                                                            </div>
                                                            <div class="col-6" style="text-align: center;">
                                                                Examen : {{$this->dtexamen->name}}
                                                            </div>
                                                        @endif
                                                   </div>
                                                   @if ($stexamen != null)
                                                   <!--Datos general del Examen-->
                                                   <div class="row">
                                                        <div class="col-12 mt-2" style="text-align: left;">
                                                            <h5>Datos Generales del Examen</h5>
                                                        </div>
                                                        <div class="col-4" style="text-align: left;">
                                                            <label for="efregistro" class="fw-bold">Fecha : <span class="text-danger">(*)</span></label>
                                                            <input type="date" id="examen_fregistro" class="form-control" wire:model="efregistro">
                                                            @error('efregistro')
                                                                <div class="p-1"> {{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="col-4" style="text-align: left;">
                                                            <label for="emedico" class="fw-bold">Elegir el Medico : <span class="text-danger">(*)</span></label>
                                                            <select id="emedico" wire:model="emedico" class="form-select">
                                                                <option value="">Elegir</option>
                                                                @foreach ($lmedicos as $lmedico)
                                                                <option value="{{$lmedico->id}}">{{$lmedico->firstname." ".$lmedico->lastname}}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('emedico')
                                                                <div class="p-1"> {{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="col-4 text-center">
                                                            <img src="{{asset($dtexamen->picture_texamen)}}" alt="" width="64px">
                                                        </div>
                                                   </div>
                                                   <!--Datos especifico del examen-->
                                                    <div class="row align-items-center">
                                                            <div class="col-12 mt-2" style="text-align: left;">
                                                                <h5>Datos Especificos del Examen</h5>
                                                            </div>
                                                    </div>
                                                    @foreach ($dtexamen->campos as $ecampo)
                                                    <div class="row align-items-center mt-1">
                                                        @if ($ecampo->dataype == "list")
                                                            <div class="col-4">
                                                                {{$ecampo->name}} @if ($ecampo->required == 1) <span class="text-danger">(*)</span> @endif
                                                            </div>
                                                            <div class="col-4">
                                                                <select id="emedico-{{$ecampo->id}}" class="form-select" wire:model='datos.{{$ecampo->id}}'>
                                                                    <option value="">Elegir</option>
                                                                    @foreach (explode (',',$ecampo->param1) as $key => $lista)
                                                                    <option value="{{$lista}}">{{$lista}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="col-4" style="text-align: left;">
                                                                {{$ecampo->leyenda}}
                                                            </div>
                                                        @elseif($ecampo->dataype == "leyenda")
                                                        <div class="row align-items-center">
                                                            <div class="col-4 fs-bold fs-5">
                                                                <u>{{$ecampo->param1}}</u>
                                                            </div>
                                                            <div class="col-4 text-center fs-bold fs-5">
                                                                <u>{{$ecampo->param2}}</u>
                                                            </div>
                                                            <div class="col-4 fs-5" style="text-align: left; fs-bold">
                                                                <u>{{$ecampo->param3}}</u>
                                                            </div>
                                                        @elseif($ecampo->dataype == "titulo")
                                                        <div class="row align-items-center">
                                                            <div class="col-4 fs-bold fs-5">
                                                            </div>
                                                            <div class="col-4 text-center fs-bold fs-5">
                                                                <u>{{$ecampo->name}}</u>
                                                            </div>
                                                            <div class="col-4 fs-5" style="text-align: left; fs-bold">
                                                            </div>
                                                        @elseif($ecampo->dataype == "text")
                                                        <div class="col-4">
                                                            {{$ecampo->name}} @if ($ecampo->required == 1) <span class="text-danger">(*)</span> @endif
                                                        </div>
                                                        <div class="col-4">
                                                            <input type="text" class="form-control" id="emedico-{{$ecampo->id}}" wire:model='datos.{{$ecampo->id}}'>
                                                        </div>
                                                        <div class="col-4" style="text-align: left;">
                                                            {{$ecampo->leyenda}}
                                                        </div>
                                                        @elseif($ecampo->dataype == "listnumber")
                                                            <div class="col-4">
                                                                {{$ecampo->name}} @if ($ecampo->required == 1) <span class="text-danger">(*)</span> @endif
                                                            </div>
                                                            <div class="col-4">
                                                                <select id="emedico-{{$ecampo->id}}" class="form-select" wire:model='datos.{{$ecampo->id}}'>
                                                                    <option value="">Elegir</option>
                                                                    @for ($i = $ecampo->param1; $i <= $ecampo->param2; $i++)
                                                                        <option value="{{$i}}">{{$i}}</option>
                                                                    @endfor
                                                                </select>
                                                            </div>
                                                            <div class="col-4" style="text-align: left;">
                                                                {{$ecampo->leyenda}}
                                                            </div>
                                                        @elseif ($ecampo->dataype == "textarea")
                                                            <div class="col-4">
                                                                {{$ecampo->name}} @if ($ecampo->required == 1) <span class="text-danger">(*)</span> @endif
                                                            </div>
                                                            <div class="col-4">
                                                                <textarea name="" id="emedico-{{$ecampo->id}}" class="form-control" wire:model='datos.{{$ecampo->id}}' cols="5" rows="3"></textarea>
                                                            </div>
                                                            <div class="col-4" style="text-align: left;">
                                                                {{$ecampo->leyenda}}
                                                            </div>
                                                        @elseif ($ecampo->dataype == "text")
                                                        @endif
                                                    </div>
                                                    @endforeach
                                                    <div class="row mt-2">
                                                        <div class="col-12">
                                                            @error('datos*')
                                                                    <div class="p-1"> {{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row mt-2">
                                                        <div class="col-12 text-center">
                                                            <button class="btn btn-primary"  wire:target="crear_modificar_examen" wire:loading.attr="disabled" wire:click="crear_modificar_examen({{$editar_examen}})">{{$titulo_examen_accion}} Examen</button>
                                                        </div>
                                                    </div>
                                                    @endif
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end -->
    @push('js')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        Livewire.on('eliminarexamen', examen_id =>{
                        Swal.fire({
                title: 'Estas Seguro',
                text: "Una vez eliminado el examen no se podra recuperar",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, !Eliminar!'
                }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.emitTo('gestionar-pacientes','eliminar_examen',examen_id);
                }
                })
        })
    </script>

    <script>
        Livewire.on('eliminarpaciente', paciente_id =>{
                        Swal.fire({
                title: 'Estas Seguro',
                text: "Una vez eliminado el paciente no se podra recuperar",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, !Eliminar!'
                }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.emitTo('gestionar-pacientes','eliminar_paciente',paciente_id);
                }
                })
        })
    </script>

    <script>
        window.livewire.on('notificar_eliminar_examen', accion => {
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: accion,
                showConfirmButton: false,
                timer: 1500
            })
        });
    </script>

<script>
    window.livewire.on('notificar_eliminar_paciente', accion => {
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: accion,
            showConfirmButton: false,
            timer: 1500
        })
    });
</script>
    @endpush
</div>
