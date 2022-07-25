<section id="seccion-ofertas">


    <div class="container">





        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                <li class="breadcrumb-item active" aria-current="page">Todos los automóviles</li>
            </ol>
        </nav>





        <div class="d-flex justify-content-between align-items-center mb-5">


            <div class="box-badges">
                <span class="badge bg-primary">Novedades</span>
                <span class="badge bg-primary">Más Valorados</span>
                <span class="badge bg-primary">Más Vendidos</span>
                <span class="badge bg-primary">Etiqueta 1</span>
                <span class="badge bg-primary">Etiqueta 2</span>
                <span class="badge bg-primary">Etiqueta 3</span>
            </div>


            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    <span>Ordenar Por:</span>
                    <img src="{{ asset('assets/img/arrow-drop-down.svg') }}">
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href="#">precio de menor a mayor</a></li>
                  <li><a class="dropdown-item" href="#">Precio de Mayor a menor</a></li>
                  <li><a class="dropdown-item" href="#">marca (a-z)</a></li>
                  <li><a class="dropdown-item" href="#">solo ofertas</a></li>
                </ul>
            </div>

        </div>

        


        <div class="row">

            <div class="col-3">
                
                @include('public.template-parts.filtros')

            </div>

            <div class="col-9">

                <div class="row">

                    <div class="col-12 col-md-4 mb-5">
                        <div class="card-oferta" data-aos="zoom-out-up">
                            <div class="item-head position-relative d-flex align-items-end">
                                <img src="{{ asset('assets/img/chery.svg') }}" class="marca-float">
                                <img src="{{ asset('assets/img/oferta1.png') }}" class="img">
                            </div>
                            <div class="item-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h6 class="text-uppercase blue m-0">grand cherokee</h6>
                                </div>
                                <p class="blue f-12">LIMITED 4X4 3.6L</p>
                                <div class="caracteristicas mt-2">
                                    <span class="blue">2021</span> | <span class="blue">Mecanica</span> | <span class="blue">cil</span>
                                </div>
                            </div>
                            <table class="w-100"> 
                                <tr class="blue">
                                    <td class="p-10 f-14 text-uppercase">Cuota desde</td>
                                    <td class="p-10 f-14 fs-5 fw-semibold">$ <span class="count">389.990</span></td>
                                </tr>
                            </table>
                            <button class="btn btn-cotizar">Ver Oferta</button>
                        </div>
                    </div>
        
                    <div class="col-12 col-md-4 mb-5">
                        <div class="card-oferta" data-aos="zoom-out-up">
                            <div class="item-head position-relative d-flex align-items-end">
                                <img src="{{ asset('assets/img/fiat.svg') }}" class="marca-float">
                                <img src="{{ asset('assets/img/oferta2.png') }}" class="img">
                            </div>
                            <div class="item-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h6 class="text-uppercase blue m-0">grand cherokee</h6>
                                </div>
                                <p class="blue f-12">LIMITED 4X4 3.6L</p>
                                <div class="caracteristicas mt-2">
                                    <span class="blue">2021</span> | <span class="blue">Mecanica</span> | <span class="blue">cil</span>
                                </div>
                            </div>
                            <table class="w-100"> 
                                <tr class="blue">
                                    <td class="p-10 f-14 text-uppercase">Cuota desde</td>
                                    <td class="p-10 f-14 fs-5 fw-semibold">$ <span class="count">389.990</span></td>
                                </tr>
                            </table>
                            <button class="btn btn-cotizar">Ver Oferta</button>
                        </div>
                    </div>
        
                    <div class="col-12 col-md-4 mb-5">
                        <div class="card-oferta" data-aos="zoom-out-up">
                            <div class="item-head position-relative d-flex align-items-end">
                                <img src="{{ asset('assets/img/subaru.svg') }}" class="marca-float">
                                <img src="{{ asset('assets/img/oferta3.png') }}" class="img">
                            </div>
                            <div class="item-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h6 class="text-uppercase blue m-0">grand cherokee</h6>
                                </div>
                                <p class="blue f-12">LIMITED 4X4 3.6L</p>
                                <div class="caracteristicas mt-2">
                                    <span class="blue">2021</span> | <span class="blue">Mecanica</span> | <span class="blue">cil</span>
                                </div>
                            </div>
                            <table class="w-100"> 
                                <tr class="blue">
                                    <td class="p-10 f-14 text-uppercase">Cuota desde</td>
                                    <td class="p-10 f-14 fs-5 fw-semibold">$ <span class="count">389.990</span></td>
                                </tr>
                            </table>
                            <button class="btn btn-cotizar">Ver Oferta</button>
                        </div>
                    </div>

                    <div class="col-12 col-md-4 mb-5">
                        <div class="card-oferta" data-aos="zoom-out-up">
                            <div class="item-head position-relative d-flex align-items-end">
                                <img src="{{ asset('assets/img/fiat.svg') }}" class="marca-float">
                                <img src="{{ asset('assets/img/oferta2.png') }}" class="img">
                            </div>
                            <div class="item-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h6 class="text-uppercase blue m-0">grand cherokee</h6>
                                </div>
                                <p class="blue f-12">LIMITED 4X4 3.6L</p>
                                <div class="caracteristicas mt-2">
                                    <span class="blue">2021</span> | <span class="blue">Mecanica</span> | <span class="blue">cil</span>
                                </div>
                            </div>
                            <table class="w-100"> 
                                <tr class="blue">
                                    <td class="p-10 f-14 text-uppercase">Cuota desde</td>
                                    <td class="p-10 f-14 fs-5 fw-semibold">$ <span class="count">389.990</span></td>
                                </tr>
                            </table>
                            <button class="btn btn-cotizar">Ver Oferta</button>
                        </div>
                    </div>
        
                    <div class="col-12 col-md-4 mb-5">
                        <div class="card-oferta" data-aos="zoom-out-up">
                            <div class="item-head position-relative d-flex align-items-end">
                                <img src="{{ asset('assets/img/subaru.svg') }}" class="marca-float">
                                <img src="{{ asset('assets/img/oferta3.png') }}" class="img">
                            </div>
                            <div class="item-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h6 class="text-uppercase blue m-0">grand cherokee</h6>
                                </div>
                                <p class="blue f-12">LIMITED 4X4 3.6L</p>
                                <div class="caracteristicas mt-2">
                                    <span class="blue">2021</span> | <span class="blue">Mecanica</span> | <span class="blue">cil</span>
                                </div>
                            </div>
                            <table class="w-100"> 
                                <tr class="blue">
                                    <td class="p-10 f-14 text-uppercase">Cuota desde</td>
                                    <td class="p-10 f-14 fs-5 fw-semibold">$ <span class="count">389.990</span></td>
                                </tr>
                            </table>
                            <button class="btn btn-cotizar">Ver Oferta</button>
                        </div>
                    </div>

                    <div class="col-12 col-md-4 mb-5">
                        <div class="card-oferta" data-aos="zoom-out-up">
                            <div class="item-head position-relative d-flex align-items-end">
                                <img src="{{ asset('assets/img/subaru.svg') }}" class="marca-float">
                                <img src="{{ asset('assets/img/oferta3.png') }}" class="img">
                            </div>
                            <div class="item-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h6 class="text-uppercase blue m-0">grand cherokee</h6>
                                </div>
                                <p class="blue f-12">LIMITED 4X4 3.6L</p>
                                <div class="caracteristicas mt-2">
                                    <span class="blue">2021</span> | <span class="blue">Mecanica</span> | <span class="blue">cil</span>
                                </div>
                            </div>
                            <table class="w-100"> 
                                <tr class="blue">
                                    <td class="p-10 f-14 text-uppercase">Cuota desde</td>
                                    <td class="p-10 f-14 fs-5 fw-semibold">$ <span class="count">389.990</span></td>
                                </tr>
                            </table>
                            <button class="btn btn-cotizar">Ver Oferta</button>
                        </div>
                    </div>

                    <div class="col-12 col-md-4 mb-5">
                        <div class="card-oferta" data-aos="zoom-out-up">
                            <div class="item-head position-relative d-flex align-items-end">
                                <img src="{{ asset('assets/img/fiat.svg') }}" class="marca-float">
                                <img src="{{ asset('assets/img/oferta2.png') }}" class="img">
                            </div>
                            <div class="item-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h6 class="text-uppercase blue m-0">grand cherokee</h6>
                                </div>
                                <p class="blue f-12">LIMITED 4X4 3.6L</p>
                                <div class="caracteristicas mt-2">
                                    <span class="blue">2021</span> | <span class="blue">Mecanica</span> | <span class="blue">cil</span>
                                </div>
                            </div>
                            <table class="w-100"> 
                                <tr class="blue">
                                    <td class="p-10 f-14 text-uppercase">Cuota desde</td>
                                    <td class="p-10 f-14 fs-5 fw-semibold">$ <span class="count">389.990</span></td>
                                </tr>
                            </table>
                            <button class="btn btn-cotizar">Ver Oferta</button>
                        </div>
                    </div>
        
                    <div class="col-12 col-md-4 mb-5">
                        <div class="card-oferta" data-aos="zoom-out-up">
                            <div class="item-head position-relative d-flex align-items-end">
                                <img src="{{ asset('assets/img/subaru.svg') }}" class="marca-float">
                                <img src="{{ asset('assets/img/oferta3.png') }}" class="img">
                            </div>
                            <div class="item-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h6 class="text-uppercase blue m-0">grand cherokee</h6>
                                </div>
                                <p class="blue f-12">LIMITED 4X4 3.6L</p>
                                <div class="caracteristicas mt-2">
                                    <span class="blue">2021</span> | <span class="blue">Mecanica</span> | <span class="blue">cil</span>
                                </div>
                            </div>
                            <table class="w-100"> 
                                <tr class="blue">
                                    <td class="p-10 f-14 text-uppercase">Cuota desde</td>
                                    <td class="p-10 f-14 fs-5 fw-semibold">$ <span class="count">389.990</span></td>
                                </tr>
                            </table>
                            <button class="btn btn-cotizar">Ver Oferta</button>
                        </div>
                    </div>

                    <div class="col-12 col-md-4 mb-5">
                        <div class="card-oferta" data-aos="zoom-out-up">
                            <div class="item-head position-relative d-flex align-items-end">
                                <img src="{{ asset('assets/img/subaru.svg') }}" class="marca-float">
                                <img src="{{ asset('assets/img/oferta3.png') }}" class="img">
                            </div>
                            <div class="item-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h6 class="text-uppercase blue m-0">grand cherokee</h6>
                                </div>
                                <p class="blue f-12">LIMITED 4X4 3.6L</p>
                                <div class="caracteristicas mt-2">
                                    <span class="blue">2021</span> | <span class="blue">Mecanica</span> | <span class="blue">cil</span>
                                </div>
                            </div>
                            <table class="w-100"> 
                                <tr class="blue">
                                    <td class="p-10 f-14 text-uppercase">Cuota desde</td>
                                    <td class="p-10 f-14 fs-5 fw-semibold">$ <span class="count">389.990</span></td>
                                </tr>
                            </table>
                            <button class="btn btn-cotizar">Ver Oferta</button>
                        </div>
                    </div>

                    <div class="col-12 col-md-4 mb-5">
                        <div class="card-oferta" data-aos="zoom-out-up">
                            <div class="item-head position-relative d-flex align-items-end">
                                <img src="{{ asset('assets/img/fiat.svg') }}" class="marca-float">
                                <img src="{{ asset('assets/img/oferta2.png') }}" class="img">
                            </div>
                            <div class="item-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h6 class="text-uppercase blue m-0">grand cherokee</h6>
                                </div>
                                <p class="blue f-12">LIMITED 4X4 3.6L</p>
                                <div class="caracteristicas mt-2">
                                    <span class="blue">2021</span> | <span class="blue">Mecanica</span> | <span class="blue">cil</span>
                                </div>
                            </div>
                            <table class="w-100"> 
                                <tr class="blue">
                                    <td class="p-10 f-14 text-uppercase">Cuota desde</td>
                                    <td class="p-10 f-14 fs-5 fw-semibold">$ <span class="count">389.990</span></td>
                                </tr>
                            </table>
                            <button class="btn btn-cotizar">Ver Oferta</button>
                        </div>
                    </div>
        
                    <div class="col-12 col-md-4 mb-5">
                        <div class="card-oferta" data-aos="zoom-out-up">
                            <div class="item-head position-relative d-flex align-items-end">
                                <img src="{{ asset('assets/img/subaru.svg') }}" class="marca-float">
                                <img src="{{ asset('assets/img/oferta3.png') }}" class="img">
                            </div>
                            <div class="item-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h6 class="text-uppercase blue m-0">grand cherokee</h6>
                                </div>
                                <p class="blue f-12">LIMITED 4X4 3.6L</p>
                                <div class="caracteristicas mt-2">
                                    <span class="blue">2021</span> | <span class="blue">Mecanica</span> | <span class="blue">cil</span>
                                </div>
                            </div>
                            <table class="w-100"> 
                                <tr class="blue">
                                    <td class="p-10 f-14 text-uppercase">Cuota desde</td>
                                    <td class="p-10 f-14 fs-5 fw-semibold">$ <span class="count">389.990</span></td>
                                </tr>
                            </table>
                            <button class="btn btn-cotizar">Ver Oferta</button>
                        </div>
                    </div>

                    <div class="col-12 col-md-4 mb-5">
                        <div class="card-oferta" data-aos="zoom-out-up">
                            <div class="item-head position-relative d-flex align-items-end">
                                <img src="{{ asset('assets/img/subaru.svg') }}" class="marca-float">
                                <img src="{{ asset('assets/img/oferta3.png') }}" class="img">
                            </div>
                            <div class="item-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h6 class="text-uppercase blue m-0">grand cherokee</h6>
                                </div>
                                <p class="blue f-12">LIMITED 4X4 3.6L</p>
                                <div class="caracteristicas mt-2">
                                    <span class="blue">2021</span> | <span class="blue">Mecanica</span> | <span class="blue">cil</span>
                                </div>
                            </div>
                            <table class="w-100"> 
                                <tr class="blue">
                                    <td class="p-10 f-14 text-uppercase">Cuota desde</td>
                                    <td class="p-10 f-14 fs-5 fw-semibold">$ <span class="count">389.990</span></td>
                                </tr>
                            </table>
                            <button class="btn btn-cotizar">Ver Oferta</button>
                        </div>
                    </div>

                    <div class="col-12 col-md-4 mb-5">
                        <div class="card-oferta" data-aos="zoom-out-up">
                            <div class="item-head position-relative d-flex align-items-end">
                                <img src="{{ asset('assets/img/fiat.svg') }}" class="marca-float">
                                <img src="{{ asset('assets/img/oferta2.png') }}" class="img">
                            </div>
                            <div class="item-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h6 class="text-uppercase blue m-0">grand cherokee</h6>
                                </div>
                                <p class="blue f-12">LIMITED 4X4 3.6L</p>
                                <div class="caracteristicas mt-2">
                                    <span class="blue">2021</span> | <span class="blue">Mecanica</span> | <span class="blue">cil</span>
                                </div>
                            </div>
                            <table class="w-100"> 
                                <tr class="blue">
                                    <td class="p-10 f-14 text-uppercase">Cuota desde</td>
                                    <td class="p-10 f-14 fs-5 fw-semibold">$ <span class="count">389.990</span></td>
                                </tr>
                            </table>
                            <button class="btn btn-cotizar">Ver Oferta</button>
                        </div>
                    </div>
        
                    <div class="col-12 col-md-4 mb-5">
                        <div class="card-oferta" data-aos="zoom-out-up">
                            <div class="item-head position-relative d-flex align-items-end">
                                <img src="{{ asset('assets/img/subaru.svg') }}" class="marca-float">
                                <img src="{{ asset('assets/img/oferta3.png') }}" class="img">
                            </div>
                            <div class="item-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h6 class="text-uppercase blue m-0">grand cherokee</h6>
                                </div>
                                <p class="blue f-12">LIMITED 4X4 3.6L</p>
                                <div class="caracteristicas mt-2">
                                    <span class="blue">2021</span> | <span class="blue">Mecanica</span> | <span class="blue">cil</span>
                                </div>
                            </div>
                            <table class="w-100"> 
                                <tr class="blue">
                                    <td class="p-10 f-14 text-uppercase">Cuota desde</td>
                                    <td class="p-10 f-14 fs-5 fw-semibold">$ <span class="count">389.990</span></td>
                                </tr>
                            </table>
                            <button class="btn btn-cotizar">Ver Oferta</button>
                        </div>
                    </div>

                    <div class="col-12 col-md-4 mb-5">
                        <div class="card-oferta" data-aos="zoom-out-up">
                            <div class="item-head position-relative d-flex align-items-end">
                                <img src="{{ asset('assets/img/subaru.svg') }}" class="marca-float">
                                <img src="{{ asset('assets/img/oferta3.png') }}" class="img">
                            </div>
                            <div class="item-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h6 class="text-uppercase blue m-0">grand cherokee</h6>
                                </div>
                                <p class="blue f-12">LIMITED 4X4 3.6L</p>
                                <div class="caracteristicas mt-2">
                                    <span class="blue">2021</span> | <span class="blue">Mecanica</span> | <span class="blue">cil</span>
                                </div>
                            </div>
                            <table class="w-100"> 
                                <tr class="blue">
                                    <td class="p-10 f-14 text-uppercase">Cuota desde</td>
                                    <td class="p-10 f-14 fs-5 fw-semibold">$ <span class="count">389.990</span></td>
                                </tr>
                            </table>
                            <button class="btn btn-cotizar">Ver Oferta</button>
                        </div>
                    </div>
        
                </div>

            </div>

        </div>


    </div>


</section>