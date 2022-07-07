<section id="seccion-contacto" class="section imgCover" style="background-image: url('{{ asset('assets/img/fondo-contacto.png') }}');">

    <div class="velo"></div>

    <div class="container position-relative">

        <div class="row justify-content-end">
        
            <div class="col-12 col-md-6">

                <div class="box-title mb-4">
                    <h3 class="text-uppercase fs-2 fw-light text-white fw-bolder">Contactenos</span></h3>
                    <p class="fw-normal text-white">Bajada en un máximo de 1  línea con CTA</p>
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

    </div>    

</section>