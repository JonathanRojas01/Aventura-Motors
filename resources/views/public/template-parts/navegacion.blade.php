<!-- Navegación -->
<div class="navegacion container">

    <div class="row">

        <div class="col-12 col-md-4">
            <a class="item-nav d-flex justify-content-between align-items-center" data-aos="fade-right" href="{{ route('page-nuevos') }}">
                <img class="icon" src="{{ asset('assets/img/icon-nav1.svg') }}">
                <div class="text-white">
                    <p class="f-14">Las mejores marcas y modelos</p>
                    <h6 class="fw-bold fs-5">Autos nuevos</h6>
                </div>
                <div class="arrow d-flex justify-content-center align-items-center">
                    <img src="{{ asset('assets/img/arrow-right-white.svg') }}">
                </div>
            </a>
        </div>

        <div class="col-12 col-md-4">
            <a class="item-nav d-flex justify-content-between align-items-center" data-aos="flip-up" href="{{ route('page-usados') }}">
                <img class="icon" src="{{ asset('assets/img/icon-nav2.svg') }}">
                <div class="text-white">
                    <p class="f-14">Gran catálogo de vehículos usados</p>
                    <h6 class="fw-bold fs-5">Usados de selección</h6>
                </div>
                <div class="arrow d-flex justify-content-center align-items-center">
                    <img src="{{ asset('assets/img/arrow-right-white.svg') }}">
                </div>
            </a>
        </div>

        <div class="col-12 col-md-4">
            <a class="item-nav d-flex justify-content-between align-items-center" data-aos="fade-left" href="{{ route('page-servicio-tecnico') }}">
                <img class="icon" src="{{ asset('assets/img/icon-nav3.svg') }}">
                <div class="text-white">
                    <p class="f-14">Lorem ipsum</p>
                    <h6 class="fw-bold fs-5">Servicio Técnico</h6>
                </div>
                <div class="arrow d-flex justify-content-center align-items-center">
                    <img src="{{ asset('assets/img/arrow-right-white.svg') }}">
                </div>
            </a>
        </div>

    </div>

</div>