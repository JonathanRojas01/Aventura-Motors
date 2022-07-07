<section id="seccion-tabs">



    <ul class="nav nav-tabs" id="myTab" role="tablist">
        
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="colores-tab" data-bs-toggle="tab" data-bs-target="#colores-tab-pane" type="button" role="tab" aria-controls="colores-tab-pane" aria-selected="true">Colores</button>
        </li>
        
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="vista-tab" data-bs-toggle="tab" data-bs-target="#vista-tab-pane" type="button" role="tab" aria-controls="vista-tab-pane" aria-selected="false">Vista 360</button>
        </li>
        
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="video-tab" data-bs-toggle="tab" data-bs-target="#video-tab-pane" type="button" role="tab" aria-controls="video-tab-pane" aria-selected="false">Video</button>
        </li>

        <li class="nav-item" role="presentation">
            <button class="nav-link" id="recorrido-tab" data-bs-toggle="tab" data-bs-target="#recorrido-tab-pane" type="button" role="tab" aria-controls="recorrido-tab-pane" aria-selected="false">Recorrido Virtual</button>
        </li>

    </ul>
    

    
    <div class="tab-content" id="myTabContent">
    


        <!-- Tab Colores -->
        <div class="tab-pane fade show active" id="colores-tab-pane" role="tabpanel" aria-labelledby="colores-tab" tabindex="0">

            <div class="box-title my-5" data-aos="zoom-in">
                <h3 class="text-uppercase fs-2 fw-light m-auto"><span class="fw-semibold">Colores disponibles</span></h3>
            </div>

            <div class="row">
                
                <div class="col-12 col-md-6 m-auto">

                    <div id="carrusel-colores" class="owl-carousel owl-theme">
                        <div class="item black">
                            <img class="slide-car m-auto" src="{{ asset('assets/img/slide-colores-1.png') }}">
                        </div>
                        <div class="item grey">
                            <img class="slide-car m-auto" src="{{ asset('assets/img/slide-colores-1.png') }}">
                        </div>
                        <div class="item red">
                            <img class="slide-car m-auto" src="{{ asset('assets/img/slide-colores-1.png') }}">
                        </div>
                        <div class="item blue">
                            <img class="slide-car m-auto" src="{{ asset('assets/img/slide-colores-1.png') }}">
                        </div>
                    </div>
                    
                </div>

            </div>

        </div>





        <div class="tab-pane fade" id="vista-tab-pane" role="tabpanel" aria-labelledby="vista-tab" tabindex="0">
        
            <div class="box-title my-5">
                <h3 class="text-uppercase fs-2 fw-light m-auto"><span class="fw-semibold">Vista 360°</span></h3>
            </div>

            <p class="text-center">No hay vista 360° disponible para este modelo</p>
        
        </div>
        
        
        
        
        
        <div class="tab-pane fade" id="video-tab-pane" role="tabpanel" aria-labelledby="video-tab" tabindex="0">
        
            <video
                id="video-auto"
                class="video-js"
                controls
                preload="auto"
                width="640"
                height="400"
                poster="{{ asset('assets/img/fondo-video.jpg') }}"
                data-setup="{}">
                <source src="{{ asset('assets/videos/video-auto.mp4') }}" type="video/mp4" />
                <source src="{{ asset('assets/videos/video-auto.mp4') }}" type="video/webm" />
            </video>

        </div>



        
        <div class="tab-pane fade" id="recorrido-tab-pane" role="tabpanel" aria-labelledby="recorrido-tab" tabindex="0">
            <p class="text-center">No hay recorrido virtual disponible para este modelo</p>
        </div>
        

    </div>



</section>