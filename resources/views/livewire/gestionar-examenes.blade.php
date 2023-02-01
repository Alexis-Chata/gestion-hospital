<div>
    <div class="row">
        <div class="col-12">
            <div class="card mb-4" style="background-color: #6c757d;">
                <div class="card-header pb-3">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <h6>Lista de Examenes</h6>
                        </div>
                        <div class="col-6">
                            @livewire('gestionar-pacientes')
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="main m-4">
                        <div class="row">
                            @foreach ($categorias as $categoria)
                                <div class="col-12  col-md-12 col-lg-6 col-xl-6 col-xxl-4">
                                    <div class="card m-4">
                                        <div class="card-body">
                                            <div class="row mb-4">
                                                <div class="col-12">
                                                    <h5 class="card-title">{{ $categoria->name }}</h5>
                                                </div>
                                                <div class="col-12">
                                                    <ul class="nav nav-pills" style="padding: 5px;">
                                                        <li class="nav-item dropdown" style="margin : auto;">
                                                            <a class="dropdown-toggle" data-bs-toggle="dropdown"
                                                                href="#" role="button"
                                                                aria-expanded="false">Lista</a>
                                                            <ul class="dropdown-menu">
                                                                @foreach ($categoria->texamens as $texamen)
                                                                    <li><a class="dropdown-item"
                                                                            id="seleccionar_texamen-{{ $texamen->id }}"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#modal_lista_examenes"
                                                                            wire:click="seleccionar_texamen({{ $texamen->id }})"><img
                                                                                src="{{ asset($texamen->picture_texamen) }}"
                                                                                alt="" width="12px">
                                                                            {{ $texamen->name }}</a></li>
                                                                @endforeach
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="text-center"><img
                                                    src="{{ asset($categoria->picture_category) }}" alt=""
                                                    width="64px"></div>
                                            <!--<a href="#" class="btn btn-primary">Ver Lista</a>-->
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--lista de examenes segun el tipo de examen-->
    <div wire:ignore.self class="modal fade" id="modal_lista_examenes" tabindex="-3"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                <div class="card-body">
                                    @if ($seleccionar_texamen == true)
                                        @livewire('lista-examen', ['spaciente' => $seleccionar_texamen])
                                    @endif
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
    <!--end-->
    @push('js')
        <script>
            window.livewire.on('abrir_gestionar_paciente', accion => {
                document.getElementById("ventana_gestionar_pacientes").click();
            });

            window.livewire.on('notificar_formulario_paciente', accion => {

                document.getElementById("1_pestana_s").click();
            });

            window.livewire.on('notificar_listado_paciente', accion => {

                document.getElementById("1_listado_s").click();
            });

            window.livewire.on('notificar_examen_paciente', accion => {

                document.getElementById("1_examen_s").click();
            });
        </script>
    @endpush
</div>
