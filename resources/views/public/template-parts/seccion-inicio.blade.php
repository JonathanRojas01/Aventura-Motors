<section id="seccion-inicio" class="mt-5">



    <div class="container">


        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                <li class="breadcrumb-item active" aria-current="page">Todos los automóviles</li>
            </ol>
        </nav>


        <div class="row">


        
            <div class="col-12 col-md-7">
            
                <!-- Slider exterior -->
                <div class="container-slider container-slider-exterior show">

                    <div class="box-flotante d-flex">
                        <img class="img-marca" src="{{ asset('assets/img/marca1.svg') }}" data-aos="flip-up">
                        <div class="box-btns d-flex justify-content-evenly align-items-center">
                            <button class="btn-change btn-toggle-slider">Ver interior</button>
                            <a href="https://aventuramotors.cl/wp-content/uploads/2022/06/Ficha-Tecnica-Jeep-Commander.pdf" target="blank" class="btn-ficha d-flex align-items-center">Ficha Técnica <img class="ms-2" src="{{ asset('assets/img/icon-pdf.svg') }}"></a>
                        </div>
                    </div>

                    <div id="carrusel_exterior" class="owl-carousel owl-theme" data-slider-id="1">
                        <div class="item zoom" style="background-image: url('{{ asset('assets/img/slide-main-1.png') }}');">
                            <img class="img-car" src="{{ asset('assets/img/slide-main-1.png') }}">
                        </div>
                        <div class="item zoom" style="background-image: url('{{ asset('assets/img/slide-main-2.jpg') }}');">
                            <img class="img-car" src="{{ asset('assets/img/slide-main-2.jpg') }}">
                        </div>
                        <div class="item zoom" style="background-image: url('{{ asset('assets/img/slide-main-3.jpg') }}');">
                            <img class="img-car" src="{{ asset('assets/img/slide-main-3.jpg') }}">
                        </div>
                        <div class="item zoom" style="background-image: url('{{ asset('assets/img/slide-main-4.jpg') }}');">
                            <img class="img-car" src="{{ asset('assets/img/slide-main-4.jpg') }}">
                        </div>
                        <div class="item zoom" style="background-image: url('{{ asset('assets/img/slide-main-5.jpeg') }}');">
                            <img class="img-car" src="{{ asset('assets/img/slide-main-5.jpeg') }}">
                        </div>
                        <div class="item zoom" style="background-image: url('{{ asset('assets/img/slide-main-6.jpg') }}');">
                            <img class="img-car" src="{{ asset('assets/img/slide-main-6.jpg') }}">
                        </div>
                    </div>
                    
                    <div class="owl-thumbs mt-2" data-slider-id="1">
                        <div class="owl-thumb-item" style="background-image: url('{{ asset('assets/img/slide-main-1.png') }}');" data-aos="fade-up"></div>
                        <div class="owl-thumb-item" style="background-image: url('{{ asset('assets/img/slide-main-2.jpg') }}');" data-aos="fade-up"></div>
                        <div class="owl-thumb-item" style="background-image: url('{{ asset('assets/img/slide-main-3.jpg') }}');" data-aos="fade-up"></div>
                        <div class="owl-thumb-item" style="background-image: url('{{ asset('assets/img/slide-main-4.jpg') }}');" data-aos="fade-up"></div>
                        <div class="owl-thumb-item" style="background-image: url('{{ asset('assets/img/slide-main-5.jpeg') }}');" data-aos="fade-up"></div>
                        <div class="owl-thumb-item" style="background-image: url('{{ asset('assets/img/slide-main-6.jpg') }}');" data-aos="fade-up"></div>
                    </div>

                </div>

                <!-- Slider interior -->
                <div class="container-slider container-slider-interior hide">

                    <div class="box-flotante d-flex">
                        <img class="img-marca" src="{{ asset('assets/img/marca1.svg') }}" data-aos="flip-up">
                        <div class="box-btns d-flex justify-content-evenly align-items-center">
                            <button class="btn-change btn-toggle-slider">Ver exterior</button>
                            <a href="https://aventuramotors.cl/wp-content/uploads/2022/06/Ficha-Tecnica-Jeep-Commander.pdf" target="blank" class="btn-ficha d-flex align-items-center">Ficha Técnica <img class="ms-2" src="{{ asset('assets/img/icon-pdf.svg') }}"></a>
                        </div>
                    </div>

                    <div id="carrusel_interior" class="owl-carousel owl-theme" data-slider-id="2">
                        <div class="item zoom" style="background-image: url('{{ asset('assets/img/slide-interior-1.png') }}');">
                            <img class="img-car" src="{{ asset('assets/img/slide-interior-1.png') }}">
                        </div>
                        <div class="item zoom" style="background-image: url('{{ asset('assets/img/slide-interior-2.jpg') }}');">
                            <img class="img-car" src="{{ asset('assets/img/slide-interior-2.jpg') }}">
                        </div>
                        <div class="item zoom" style="background-image: url('{{ asset('assets/img/slide-interior-3.jpg') }}');">
                            <img class="img-car" src="{{ asset('assets/img/slide-interior-3.jpg') }}">
                        </div>
                        <div class="item zoom" style="background-image: url('{{ asset('assets/img/slide-interior-4.jpg') }}');">
                            <img class="img-car" src="{{ asset('assets/img/slide-interior-4.jpg') }}">
                        </div>
                        <div class="item zoom" style="background-image: url('{{ asset('assets/img/slide-interior-5.jpg') }}');">
                            <img class="img-car" src="{{ asset('assets/img/slide-interior-5.jpg') }}">
                        </div>
                        <div class="item zoom" style="background-image: url('{{ asset('assets/img/slide-interior-6.jpg') }}');">
                            <img class="img-car" src="{{ asset('assets/img/slide-interior-6.jpg') }}">
                        </div>
                    </div>
                    
                    <div class="owl-thumbs mt-2" data-slider-id="2">
                        <div class="owl-thumb-item" style="background-image: url('{{ asset('assets/img/slide-interior-1.png') }}');"></div>
                        <div class="owl-thumb-item" style="background-image: url('{{ asset('assets/img/slide-interior-2.jpg') }}');"></div>
                        <div class="owl-thumb-item" style="background-image: url('{{ asset('assets/img/slide-interior-3.jpg') }}');"></div>
                        <div class="owl-thumb-item" style="background-image: url('{{ asset('assets/img/slide-interior-4.jpg') }}');"></div>
                        <div class="owl-thumb-item" style="background-image: url('{{ asset('assets/img/slide-interior-5.jpg') }}');"></div>
                        <div class="owl-thumb-item" style="background-image: url('{{ asset('assets/img/slide-interior-6.jpg') }}');"></div>
                    </div>

                </div>

            </div>



            <div class="col-12 col-md-5 box-form">
            

                <!-- Titulo -->
                <h3 class="text-uppercase fs-2 fw-light blue">grand cherokee <br>lorem ipsum</h3>


                <!-- Precio y comparar -->
                <div class="d-flex justify-content-between align-items-center">
                    <p class="blue text-uppercase">PRECIO desde: $<span class="fw-bold ms-1 fs-4"><span class="count">44.990.000</span></span></p>
                    <button class="btn-ficha">Comparar <img class="ms-2" src="{{ asset('assets/img/icon-comparar.svg') }}"></button>
                </div>


                <!-- Caracteristicas -->
                <div class="box-caracteristicas my-4">
                    <div class="row">
                        <div class="col text-center p-0">
                            <p class="fs-5 fw-bold"><span class="count">6</span></p>
                            <p class="f-12">Cantidad de pasajeros</p>
                        </div>
                        <div class="col text-center p-0">
                            <p class="fs-5 fw-bold"><span class="count">2000</span></p>
                            <p class="f-12">HP</p>
                        </div>
                        <div class="col text-center p-0">
                            <p class="fs-5 fw-bold"><span class="count">3500</span></p>
                            <p class="f-12">Torque</p>
                        </div>
                        <div class="col text-center p-0">
                            <p class="fs-5 fw-bold"><span class="count">10000</span></p>
                            <p class="f-12">Rendimiento</p>
                        </div>
                    </div>
                </div>


                <!-- Disponible -->
                <div class="box-disponible mb-4">
                    <p class="f-12 fw-bold">DISPONIBLE EN SUCURSALES: <span class="fw-light ms-3">Av. Chicureo km 2,2   |   Av. Vitacura 7408</span></p>
                </div>


                <!-- Cotice -->
                <div class="box-title mb-4">
                    <h5 class="text-uppercase fs-3 fw-light fw-bolder blue">Cotice este modelo</span></h5>
                    <p class="fw-normal">Dejenos sus datos y lo contactaremos a la brevedad</p>
                </div>


                <!-- Formulario -->
                <form class="form-cotizacion">
    
                    <div class="row mb-3">
                        <div class="col-12 col-md-6 mb-3">
                            <label for="inputName" class="form-label">Nombre completo</label>
                            <input type="text" class="form-control" id="inputName" name="inputName" placeholder="Nombre y apellido">
                        </div>
                        <div class="col-12 col-md-6 mb-3">
                            <label for="inputRut" class="form-label">RUT</label>
                            <input type="text" class="form-control" id="inputRut" name="inputRut" placeholder="12.345.678-9">
                        </div>
                        <div class="col-12 col-md-6 mb-3">
                            <label for="inputEmail" class="form-label">Email</label>
                            <input type="text" class="form-control" id="inputEmail" name="inputEmail" placeholder="correo@electronico.com">
                        </div>
                        <div class="col-12 col-md-6 mb-3">
                            <label for="inputPhone" class="form-label">Teléfono</label>
                            <input type="text" class="form-control" id="inputPhone" name="inputPhone" placeholder="+569 12345678">
                        </div>
                        <div class="col-12 col-md-6 mb-3">
                            <label class="form-label">Seleccione Región</label>
                            <select class="form-select">
                                <option selected>Seleccione Región</option>
                                <option value="1">Valparaíso</option>
                                <option value="2">Santiago</option>
                                <option value="3">Antofagasta</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-6 mb-3">
                            <label class="form-label">Seleccione Comuna</label>
                            <select class="form-select">
                                <option selected>Seleccione Comuna</option>
                                <option value="1">Valparaíso</option>
                                <option value="2">Santiago</option>
                                <option value="3">Antofagasta</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-6 mb-3">
                            <label class="form-label">Seleccione una versión</label>
                            <select class="form-select">
                                <option selected>Seleccione una versión</option>
                                <option value="1">123xh</option>
                                <option value="2">321xh</option>
                                <option value="3">888xh</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-6 mb-3">
                            <label class="form-label">Seleccione una sucursal</label>
                            <select class="form-select">
                                <option selected>Seleccione una sucursal</option>
                                <option value="1">123xh</option>
                                <option value="2">321xh</option>
                                <option value="3">888xh</option>
                            </select>
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-label">Enviar mensaje</label>
                            <textarea class="form-control" id="inputTextarea" rows="5" placeholder="Escriba tu mensaje aquí"></textarea>
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-send btn-light float-end">Enviar</button>

                </form>


            </div>



        </div>


    </div>



</section>