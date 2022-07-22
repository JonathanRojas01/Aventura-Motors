<div id="page-desabolladura">

    @include('public.template-parts.header')
    @include('public.template-parts.banner-desabolladura')



    <section id="section-content-otros" class="my-5">


        <div class="container">

            
            <div class="row pt-5">

                <div class="col-12 col-md-6 pe-5">
                    <h4 class="f-40">DESABOLLADURA <br>Y PINTURA</h4>
                    <p>En nuestro taller de desabolladura y pintura, nos comprometemos a entregar resultados de alta calidad para que los arreglos de tu vehículo sean casi imperceptibles. No sólo porque es nuestro deber, sino porque es una de nuestras pasiones. Contamos con profesionales especialistas en pintura automotriz, donde se crea el color exacto de tu automóvil, poniendo especial énfasis en los detalles y terminaciones, equipándonos con tecnología de punta para lograr resultados óptimos y que garanticen la calidad de nuestro servicio.</p>
                </div>

                <div class="col-12 col-md-6 ps-5">

                    <div class="box-title mb-4">
                        <h3 class="text-uppercase fs-2 fw-light blue-dark fw-bolder">Contactenos</span></h3>
                        <p class="fw-normal blue">AGENDA TU HORA Y SE PONDRÁN EN CONTACTO <br>CONTIGO PARA CONFIRMARLA</p>
                    </div>
    
                    <form class="form-contacto">
        
                        <div class="row mb-3">
                            <div class="col-4">
                                <input type="text" class="form-control" id="inputName" placeholder="Nombre">
                            </div>
                            <div class="col-4">
                                <input type="text" class="form-control" id="inputRut" placeholder="RUT">
                            </div>
                            <div class="col-4">
                                <input type="email" class="form-control" id="inputEmail" placeholder="Email Address">
                            </div>
                        </div>
    
                        <div class="row mb-3">
                            <div class="col-6">
                                <select class="form-select">
                                    <option selected>Seleccione Región</option>
                                    <option value="1">Valparaíso</option>
                                    <option value="2">Santiago</option>
                                    <option value="3">Antofagasta</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <select class="form-select">
                                    <option selected>Seleccionar Comuna</option>
                                    <option value="1">Valparaíso</option>
                                    <option value="2">Santiago</option>
                                    <option value="3">Antofagasta</option>
                                </select>
                            </div>
                        </div>
    
                        <div class="row mb-3">
                            <div class="col-6">
                                <input type="text" class="form-control" id="inputPhone" placeholder="Celular (ej: 989765432)">
                            </div>
                            <div class="col-6">
                                <select class="form-select">
                                    <option selected>Asunto</option>
                                    <option value="1">Valparaíso</option>
                                    <option value="2">Santiago</option>
                                    <option value="3">Antofagasta</option>
                                </select>
                            </div>
                        </div>
    
                        <div class="row mb-3">
                            <div class="col-12">
                                <textarea class="form-control" id="inputTextarea" rows="5" placeholder="Escriba aquí su mensaje"></textarea>
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-send float-end">Enviar <img class="ms-2" src="{{ asset('assets/img/small-arrow.svg') }}"></button>
    
                    </form>
    
                </div>

            </div>


            <div class="row">

                <div class="col-12 col-md-6">

                    <div class="row">

                        <div class="col-6">
                            <p class="mb-3">ENCUÉNTRANOS EN:</p>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1006.0012622646734!2d-70.67696589671914!3d-33.28589173193039!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662b9132b297a31%3A0xc182fefdb83245b3!2sAventura%20Motors%20Chicureo!5e0!3m2!1ses!2scl!4v1657295546805!5m2!1ses!2scl" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>

                        <div class="col-6 d-flex align-items-center">
                            <div class="d-flex">
                                <img src="{{ asset('assets/img/pin2.svg') }}" class="me-2" style="width: 40px;">
                                <p class="blue fw-bold">SANTA ELENA <br>DE HUECHURABA</p>
                            </div>
                        </div>

                    </div>

                </div>

            </div>


        </div>


    </section>



    @include('public.template-parts.footer')

</div>