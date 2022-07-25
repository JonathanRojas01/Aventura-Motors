<div id="filtros" class="">


    <h5 class="blue text-uppercase fw-semibold">filtra tu Búsqueda</h5>


    <div class="accordion-filtros accordion mt-4" id="accordionFiltros">
        

        <!-- Categorías -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="heading1">
                <button class="accordion-button blue" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                    <div class="d-flex">
                        <p class="text-uppercase me-5">Categorías</p> <p>(07)</p>
                    </div>
                    <img src="{{ asset('assets/img/arrow-drop-up.svg') }}">
                </button>
            </h2>
            <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1" data-bs-parent="#accordionFiltros">
                <div class="accordion-body">
                    <ul class="blue p-0">
                        <li><a href="#">hatchback</a></li>
                        <li><a href="#">sedan</a></li>
                        <li><a href="#">suv</a></li>
                        <li><a href="#">camioneta</a></li>
                        <li><a href="#">híbrido</a></li>
                        <li><a href="#">vehículos comerciales</a></li>
                        <li><a href="#">Flotas</a></li>
                    </ul>
                </div>
            </div>
        </div>


        <!-- Combustible -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="heading2">
                <button class="accordion-button blue" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
                    <div class="d-flex">
                        <p class="text-uppercase me-5">Combustible</p> <p>(04)</p>
                    </div>
                    <img src="{{ asset('assets/img/arrow-drop-up.svg') }}">
                </button>
            </h2>
            <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordionFiltros">
                <div class="accordion-body">
                    <ul class="blue p-0">
                        <li><a href="#">bencina</a></li>
                        <li><a href="#">disel</a></li>
                        <li><a href="#">eléctrico</a></li>
                        <li><a href="#">híbrido</a></li>
                    </ul>
                </div>
            </div>
        </div>


        <!-- Transmisión -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="heading3">
                <button class="accordion-button blue" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="true" aria-controls="collapse3">
                    <div class="d-flex">
                        <p class="text-uppercase me-5">Transmisión</p> <p>(02)</p>
                    </div>
                    <img src="{{ asset('assets/img/arrow-drop-up.svg') }}">
                </button>
            </h2>
            <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordionFiltros">
                <div class="accordion-body">
                    <ul class="blue p-0">
                        <li><a href="#">Automática</a></li>
                        <li><a href="#">manual</a></li>
                    </ul>
                </div>
            </div>
        </div>


        <!-- Marca -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="heading4">
                <button class="accordion-button blue" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="true" aria-controls="collapse4">
                    <div class="d-flex">
                        <p class="text-uppercase me-5">Marca</p> <p>(10)</p>
                    </div>
                    <img src="{{ asset('assets/img/arrow-drop-up.svg') }}">
                </button>
            </h2>
            <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordionFiltros">
                <div class="accordion-body">
                    <ul class="blue p-0">
                        <li><a href="#">CHERY</a></li>
                        <li><a href="#">DODGE</a></li>
                        <li><a href="#">FIAT</a></li>
                        <li><a href="#">HYUNDAI</a></li>
                        <li><a href="#">JEEP</a></li>
                        <li><a href="#">KIA</a></li>
                        <li><a href="#">MITSUBISHI</a></li>
                        <li><a href="#">RAM</a></li>
                        <li><a href="#">SSANGYONG</a></li>
                        <li><a href="#">SUBARU</a></li>
                    </ul>
                </div>
            </div>
        </div>


        <!-- Precio -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="heading5">
                <button class="accordion-button blue" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="true" aria-controls="collapse5">
                    <div class="d-flex">
                        <p class="text-uppercase me-5">Precio</p>
                    </div>
                    <img src="{{ asset('assets/img/arrow-drop-up.svg') }}">
                </button>
            </h2>
            <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordionFiltros">
                <div class="accordion-body">
                    <form class="multi-range-field m-0">
                        <input id="multi3" class="multi-range" type="range" />
                    </form>
                </div>
            </div>
        </div>


        <!-- Año -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="heading6">
                <button class="accordion-button blue" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="true" aria-controls="collapse6">
                    <div class="d-flex">
                        <p class="text-uppercase me-5">Año</p>
                    </div>
                    <img src="{{ asset('assets/img/arrow-drop-up.svg') }}">
                </button>
            </h2>
            <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordionFiltros">
                <div class="accordion-body">
                    <form class="multi-range-field m-0">
                        <input id="multi3" class="multi-range" type="range" />
                    </form>
                </div>
            </div>
        </div>


        <div class="box-btns d-flex flex-column mt-5">
            <button class="btn-search mb-3">buscar resultados</button>
            <button class="btn-clean text-uppercase blue">Limpiar Filtros</button>
        </div>
            

    </div>
    

</div>