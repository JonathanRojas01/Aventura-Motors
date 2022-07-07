<nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-lg-none">
    <a href="#" class="text-center">
        <img src="{{ asset('images/aventuramotors.png') }}" alt="aventura-motors" width="180">
    </a>
    <div class="d-flex align-items-center">
        <button class="navbar-toggler d-lg-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>
<nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse simplebar-scrollable-y">
    <div class="simplebar-wrapper">
        <div class="sidebar-inner px-4 pt-3">

            <div class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
                <div class="d-flex align-items-center">
                    <div class="avatar-lg me-4">
                        <i class="fa-solid fa-user fa-xl"></i>
                    </div>
                    <div class="d-block">
                        <h2 class="h5 mb-3">{{ Auth::user()->user_name }}</h2>
                        <a href="#" class="btn btn-secondary btn-sm d-inline-flex align-items-center" onclick="document.formLogoutLeft.submit()">
                            <i class="fa-solid fa-arrow-right-from-bracket me-3"></i>
                            <form action="{{ route('logout') }}" method="POST" style="display: none;" name="formLogoutLeft">
                                @csrf
                            </form> Cerrar sesión
                        </a>
                    </div>
                </div>
                <div class="collapse-close d-md-none">
                    <a href="#sidebarMenu" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="true" aria-label="Toggle navigation" class="">
                        <i class="fa-solid fa-xmark fa-lg text-white"></i>
                    </a>
                </div>
            </div>

            <div class="logo py-3 text-center">
                <img src="{{ asset('images/aventuramotors.png') }}" alt="aventura-motors" width="180">
            </div>
            <ul class="nav flex-column pt-3 pt-md-0">

                <li class="nav-item @if(Route::currentRouteName() == 'dashboard') active @endif">
                    <a href="{{ route('dashboard') }}" class="nav-link d-flex align-items-center">
                        <span class="fa fa-home"></span>
                        <span class="mt-1 ms-1 sidebar-text">Inicio</span>
                    </a>
                </li>

                <li class="nav-item @if(str_contains(Route::currentRouteName(), 'marca')) active @endif">
                    <a href="{{ route('marca.index') }}" class="nav-link d-flex align-items-center">
                        <span class="fa fa-solid fa-bookmark"></span>
                        <span class="mt-1 ms-1 sidebar-text">Marcas</span>
                    </a>
                </li>

                <li class="nav-item @if(str_contains(Route::currentRouteName(), 'categoria')) active @endif">
                    <a href="{{ route('categorias.index') }}" class="nav-link d-flex align-items-center">
                        <span class="fa fa-solid fa-layer-group"></span>
                        <span class="mt-1 ms-1 sidebar-text">Categorias</span>
                    </a>
                </li>

                <li class="nav-item @if(str_contains(Route::currentRouteName(), 'vehiculo')) active @endif">
                    <a href="{{ route('vehiculos.index') }}" class="nav-link d-flex align-items-center">
                        <span class="fa fa-solid fa-truck"></span>
                        <span class="mt-1 ms-1 sidebar-text">Vehículos</span>
                    </a>
                </li>

                <li class="nav-item @if(str_contains(Route::currentRouteName(), 'version')) active @endif">
                    <a href="{{ route('versiones.index') }}" class="nav-link d-flex align-items-center">
                        <span class="fa fa-solid fa-car"></span>
                        <span class="mt-1 ms-1 sidebar-text">Versiones</span>
                    </a>
                </li>

                <li class="nav-item @if(str_contains(Route::currentRouteName(), 'caracteristica')) active @endif">
                    <a href="{{ route('caracteristicas.index') }}" class="nav-link d-flex align-items-center">
                        <span class="fa fa-solid fa-screwdriver-wrench"></span>
                        <span class="mt-1 ms-1 sidebar-text">Características</span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>