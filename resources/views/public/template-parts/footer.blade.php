
    <footer class="p-5 text-white">

        <div class="container">

            <div class="row">
                
                <!-- Trabaja con nosotros -->
                <div class="trabaja col-12 col-md-4">
                    <div class="row">
                        <div class="col-12 mb-3">
                            <a class="footer-logo" href="./">
                                <img src="{{ asset('assets/img/logo2.svg') }}">
                            </a>
                        </div>
                        <div class="col-12 d-flex">
                            <a href="#" class="fw-light text-white me-4 f-12">Trabaja con nosotros</a>
                            <a href="#" class="fw-light text-white f-12">Métodos de pago</a>
                        </div>
                    </div>
                </div>

                <!-- Contact -->
                <div class="col-12 col-md-2">
                    <div class="info">
                        <p class="f-12 mb-3"><img class="me-2" src="{{ asset('assets/img/pin.svg') }}">123 Mockup, ST. New York</p>
                        <p class="f-12 mb-3"><img class="me-2" src="{{ asset('assets/img/phone.svg') }}">(+1) 123 456 7891</p>
                        <p class="f-12 mb-3"><img class="me-2" src="{{ asset('assets/img/telephone.svg') }}">(+1) 123 456 7891</p>
                    </div>
                </div>
                
                <!-- RRSS -->
                <div class="col-12 col-md-2">
                    <h6 class="ms-4">Síguenos</h6>
                    <div class="rrss d-flex justify-content-around align-items-center">    
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
                
                <!-- Newsletter -->
                <div class="col-12 col-md-4">
                    <h6>Newsletter</h6>
                    <p class="f-12">Bajada en un máximo de 2 líneas con CTA <br>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do </p>
                
                    <form class="row g-3 mt-2">
                        <div class="col-auto d-flex align-items-center">
                            <input type="password" class="form-control input-news" id="inputPassword2" placeholder="Your email">
                            <button type="submit" class="btn btn-primary btn-news m-0">Subscribe</button>
                        </div>
                    </form>
                
                </div>
            
            </div>

        </div>

    </footer>






    <!-- Modal Cotizar -->
    <div class="modalCotizar modal fade" id="modalCotizarModelo" tabindex="-1" aria-labelledby="modalCotizarModeloLabel" aria-hidden="true">
        
        <div class="modal-dialog">
        
            <div class="modal-content">
            
                <!-- Header -->
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            
                <!-- Body -->
                <div class="modal-body">
                    

                    <div class="col-12 box-form">
                    

                        <!-- Titulo -->
                        <h3 class="text-uppercase fs-2 fw-light blue">grand cherokee <br>lorem ipsum</h3>


                        <!-- Precio -->
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="blue text-uppercase">PRECIO desde: $<span class="fw-bold ms-1 fs-4"><span class="count">44.990.000</span></span></p>
                        </div>


                        <!-- Caracteristicas -->
                        <div class="box-caracteristicas my-4">
                            <div class="row">
                                <div class="col text-center p-0">
                                    <p class="fs-5 fw-bold"><span class="count">100</span></p>
                                    <p class="f-12">Cap. Maleta</p>
                                </div>
                                <div class="col text-center p-0">
                                    <p class="fs-5 fw-bold"><span class="count">2000</span></p>
                                    <p class="f-12">HP</p>
                                </div>
                                <div class="col text-center p-0">
                                    <p class="fs-5 fw-bold"><span class="count">80</span>/<span class="count">100</span>(KM)</p>
                                    <p class="f-12">Ciudad/Carretera</p>
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
        
        </div>

    </div>




    <!-- Modal Agendar -->
    <div class="modalAgendar modal fade" id="modalAgendar" tabindex="-1" aria-labelledby="modalAgendarLabel" aria-hidden="true">
        
        <div class="modal-dialog">
        
            <div class="modal-content">
            
                <!-- Header -->
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            
                <!-- Body -->
                <div class="modal-body">
                    

                    <div class="col-12 box-form">
                    

                        <!-- Titulo -->
                        <h3 class="text-uppercase fs-4 fw-semibold blue pb-3 border-b">Nombre del servicio en un máximo <br>de 2 líneas</h3>


                        <p class="my-4">Inscribiendote en este formulario y un ejecutivo se comunicará a la brevedad</p>


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
        
        </div>

    </div>



    <!-- Modal Video -->
    <div class="modalVideo modal fade" id="modalVideo" tabindex="-1" aria-labelledby="modalVideoLabel" aria-hidden="true">
        
        <div class="modal-dialog">
        
            <div class="modal-content">
                    
                <!-- Body -->
                <div class="modal-body">
                    <iframe src="https://www.youtube.com/embed/Cu6PCXVjtc4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>

            </div>
        
        </div>

    </div>





    
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel2.thumbs.js') }}"></script>
    <script src="{{ asset('assets/js/imgLiquid.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.zoom.js') }}"></script>
    <script src="https://vjs.zencdn.net/7.19.2/video.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{{ asset('assets/js/in-view.js') }}"></script>
    <script src="{{ asset('assets/js/count-up.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-parallax-js@5.5.1/dist/simpleParallax.min.js"></script>
    <script src="{{ asset('assets/js/utils.js') }}"></script>

    </body>

</html>
