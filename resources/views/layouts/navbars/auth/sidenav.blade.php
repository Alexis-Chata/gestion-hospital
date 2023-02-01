<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
    id="sidenav-main" style="z-index: 4">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0">
            <img src="./img/logo_rafael.png" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold">Sanatorio San Rafael</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Administración</h6>
            </li>
            @hasanyrole('Operativo|Administrador')
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'examenes' ? 'active' : '' }}" href="{{ route('examenes') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-stethoscope text-info text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Examenes</span>
                </a>
            </li>
            @endhasanyrole
            @hasanyrole('Administrador')
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'usuarios' ? 'active' : '' }}" href="{{ route('usuarios') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-user text-info text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Usuarios</span>
                </a>
            </li>
            @endhasanyrole
            @hasanyrole('Medico|Administrador')
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'pacientes' ? 'active' : '' }}" href="{{ route('pacientes') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-address-book text-info text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Pacientes</span>
                </a>
            </li>
            @endhasanyrole
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'cambiar.password' ? 'active' : '' }}" href="{{ route('cambiar.password') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-lock text-info text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Cambiar Contraseña</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
