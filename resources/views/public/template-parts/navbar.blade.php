<!-- Barra top -->
<div class="barra-top p-1">
    <div class="container d-flex justify-content-between align-content-center">
        
        <a href="https://www.sigaerp.net/AventuraOT/" target="blank" class="link-estado text-uppercase d-flex align-items-center fw-semibold">Consulta el estado  de tu vehículo aquí <img src="{{ asset('assets/img/small-arrow.svg') }}"></a>

        <div class="d-flex justify-content-between align-items-center">

            <p>CALL CENTER +562 2411 5500</p>
            
            <a class="mx-4" href="{{ route('page-bases-legales') }}">BASES LEGALES</a>
            
            <div class="rrss">
                <a href="https://www.facebook.com/AventuraMotors/" target="blank">
                    <img class="normal" src="{{ asset('assets/img/facebook.svg') }}">
                    <img class="hover" src="{{ asset('assets/img/facebook-hover.svg') }}">
                </a>
                <a href="https://www.instagram.com/aventura_motors/" target="blank">
                    <img class="normal" src="{{ asset('assets/img/instagram.svg') }}">
                    <img class="hover" src="{{ asset('assets/img/instagram-hover.svg') }}">
                </a>
                <a href="https://www.youtube.com/channel/UCzilVvy7V7SOKkW1ULDl7uw" target="blank">
                    <img class="normal" src="{{ asset('assets/img/youtube.svg') }}">
                    <img class="hover" src="{{ asset('assets/img/youtube-hover.svg') }}">
                </a>
            </div>

        </div>

    </div>
</div>


<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
    

    <div class="container">
    
        <a class="navbar-logo me-3" href="./">
            <img src="{{ asset('assets/img/logo.svg') }}">
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link fw-semibold active" aria-current="page" href="./">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-semibold" href="{{ route('page-nuevos') }}">Autos Nuevos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-semibold" href="{{ route('page-usados') }}">Usados de Selección</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-semibold" href="{{ route('page-sala-ventas') }}">Salas de Ventas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-semibold" href="{{ route('page-servicio-tecnico') }}">Servicio Técnico</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-semibold" href="{{ route('page-desabolladura') }}">Desabolladura y Pintura</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-semibold" href="{{ route('page-otros') }}">Otros Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-semibold" href="{{ route('page-contacto') }}">Contacto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-semibold" href="{{ route('single-marca') }}">Modelos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-semibold" href="{{ route('single-car') }}">Autos</a>
                </li>
            </ul>
            
            {{-- <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Buscar">
            </form> --}}

        </div>

    </div>


</nav>