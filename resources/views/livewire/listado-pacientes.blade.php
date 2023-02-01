<div>
    <div class="row">
        <div class="col-12">
            <div class="card mb-4" style="background-color: #6c757d;">
                <div class="card-header pb-3">
                    <div class="row align-items-center">
                        <div class="col-6 fs-1">
                            <h6 class="fs-3">Lista de Pacientes</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="row my-3">
                            <div class="col-12 col-md-7" style="text-align: left;">
                                <label for="bpaciente" class="fw-bold">Buscar Paciente :
                                </label>
                                <input type="bpaciente" class="form-control" name="" id="bpaciente" wire:model="bpaciente">
                            </div>
                            <div class="col-12 col-md-5" style="text-align: left;">
                                <label for="n_pagina">Paginación</label>
                                <select class="form-select" wire:model="n_pagina">
                                    <option value="5">5</option>
                                    <option value="10">10</option>
                                    <option value="{{$pacientes->total()}}">Todo</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col table-responsive">
                                <table class="table table-dark">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Id</th>
                                            <th class="text-center">Nombres y Apellidos</th>
                                            <th class="text-center">Edad</th>
                                            <th class="text-center">Celular</th>
                                            <th class="text-center">Tel. 1</th>
                                            <th class="text-center">Tel. 2</th>
                                            <th class="text-center">Dirección</th>
                                            <th class="text-center">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table table-secondary">
                                        @foreach ($pacientes as $paciente)
                                        <tr>
                                            <td class="text-center">{{$paciente->id}}</td>
                                            <td style="text-align: center;">{{$paciente->firstname}} {{$paciente->lastname}}</td>
                                            @if ($paciente->obtener_edad == null)
                                            <td class="text-center">{{$paciente->edad}}</td>
                                            @else
                                            <td class="text-center">{{$paciente->obtener_edad}}</td>
                                            @endif
                                            <td class="text-center">{{$paciente->celular}}</td>
                                            <td class="text-center">{{$paciente->telefono}}</td>
                                            <td class="text-center">{{$paciente->telefono2}}</td>
                                            <td style="text-align: center;">{{$paciente->direccion}}</td>
                                            <td style="text-align: center;">
                                                <button class="btn text-white" style="background-color: #0d6efd;" wire:click="ver_detalles({{$paciente->id}})">Detalles</button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row mt-3">
                                <div id="col">
                                    {{$pacientes->links()}}
                                </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                @if ($spaciente != null)
                                @livewire('examenes-paciente', ['spaciente' => $spaciente])
                                @endif
                            </div>
                            <div class="col-6">
                                @if ($spaciente != null)
                                @livewire('recetas-paciente', ['spaciente' => $spaciente])
                                @endif
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
