<div id="single-modelo">

    @include('public.template-parts.header')
    @include('public.template-parts.seccion-banners-modelos')
    @include('public.template-parts.seccion-modelos-internos')




    <section id="seccion-servicios-2" class="imgCover zoom-in-out" style="background-image: url('{{ asset('assets/img/fondo-servicios2.png') }}');">

        <div class="velo2"></div>

        <div class="marca">
            <img src="{{ asset('assets/img/marca1.svg') }}">
        </div>

        <div class="container position-relative">

            <div class="row mb-5" data-aos="fade-right">
                <span class="text-white">LOS SERVICIOS QUE TU AUTO NECESITA</span>
                <p class="text-white f-60 text-uppercase fw-semibold">Servicios</p>
            </div>

            <div class="row serv">

                <div class="col-3 text-center border-r" data-aos="zoom-in">
                    <img src="{{ asset('assets/img/servicios1.svg') }}">
                    <p class="text-white fw-bold mt-3">Servicio Técnico</p>
                </div>

                <div class="col-3 text-center border-r" data-aos="zoom-in">
                    <img src="{{ asset('assets/img/servicios2.svg') }}">
                    <p class="text-white fw-bold mt-3">Accesorios</p>
                </div>

                <div class="col-3 text-center border-r" data-aos="zoom-in">
                    <img src="{{ asset('assets/img/servicios3.svg') }}">
                    <p class="text-white fw-bold mt-3">Repuestos</p>
                </div>

                <div class="col-3 text-center border-r" data-aos="zoom-in">
                    <img src="{{ asset('assets/img/servicios4.svg') }}">
                    <p class="text-white fw-bold mt-3">Desabolladura y pintura</p>
                </div>

            </div>

        </div>

    </section>

    
    

    <section id="seccion-ubicaciones" class="my-5">

        <div class="container">


            <div class="box-title mb-4" data-aos="fade-right">
                <h3 class="text-uppercase fs-2 fw-light"><span class="fw-semibold">Encuéntralos en</span></h3>
            </div>    

    
            <div class="row">
                <div class="col-12">
                    @include('public.template-parts.ubicacion-tabs')
                </div>
            </div>
    
        </div>
    
    </section>



    @include('public.template-parts.seccion-financiamiento')



    @include('public.template-parts.footer')

</div>