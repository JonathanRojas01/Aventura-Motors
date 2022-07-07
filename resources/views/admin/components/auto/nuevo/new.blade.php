@extends('admin.app')

@section('main')
    <div class="container">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center mb-3">
            <div class="d-block mb-4 mb-md-0">
                <h2 class="h4">Crear vehículo nuevo</h2>
            </div>
        </div>
        <form action="{{ route('vehiculos.nuevos.store') }}" method="POST" enctype='multipart/form-data'>
            <div class="row">
                <div class="col-md-4">
                    <div class="card shadow mb-3">
                        <div class="card-body">
                            @csrf
                            <div class="row mb-3">
                                <div class="col">
                                    <label class="form-label" for="marca">Marca:</label>
                                    <select name="marca" id="marca" class="form-select @error('marca') is-invalid @enderror" required>
                                        <option disabled selected value style="font-style: italic">Elija una marca...</option>
                                        @foreach($marcas as $marca)
                                        <option value="{{ $marca->id }}">{{ $marca->nombre }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="modelo">Modelo:</label>
                                    <input type="text" class="form-control @error('modelo') is-invalid @enderror" name="modelo" id="modelo" required @error('modelo') autofocus @enderror placeholder="Nombre del modelo" value="{{ old('modelo') }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <label class="form-label" for="categoria">Categoria:</label>
                                    <select name="categoria" id="categoria" class="form-select @error('categoria') is-invalid @enderror" required>
                                        <option disabled selected value style="font-style: italic">Elija una categoria...</option>
                                        @foreach($categorias as $categoria)
                                        <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            @if ($errors->any())
                            <div class="row mb-5">
                                <div class="col">
                                    <div class="alert alert-danger">
                                        <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card shadow mb-3">
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="imagenes">Seleccione uno a más imágenes:</label>
                                    <input type="file" multiple class="form-control @error('imagenes') is-invalid @enderror" id="imagenes" name="imagenes[]" required accept="image/png, image/gif, image/jpeg, image/jpg">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <div id="content_imagenes" class="card card-body d-flex" style="min-height: 150px">
                                        <div class="row">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary mt-3" type="submit">
                        <i class="fa-solid fa-floppy-disk me-3"></i>
                        Crear Vehículo
                    </button>
                </div>
            </div>
        </form>
        <script>
            const imagenes = document.getElementById('imagenes');
            const content_imagenes = document.querySelector('#content_imagenes .row');
            var image_files = [];
            
            imagenes.onchange = function(e){
                content_imagenes.innerHTML = '';

                for (var i = 0; i < e.target.files.length; i++) {
                    //image_files.push(e.target.files[i]);
                    content_imagenes.appendChild(createChildImage(e.target.files[i]));
                }

                //e.target.files = image_files;
            };

            function createChildImage(image)
            {
                var img = document.createElement('img');
                img.src = URL.createObjectURL(image);
                img.height = 35;

                var content_img = document.createElement('div');
                content_img.setAttribute('class', 'col-6');
                var box_img = document.createElement('div');
                box_img.setAttribute('class', 'p-3 mb-3 border');
                var row_img = document.createElement('div');
                row_img.setAttribute('class', 'row');

                var logo_img = document.createElement('div');
                logo_img.setAttribute('class', 'col-4 text-center');
                var name_img = document.createElement('div');
                name_img.setAttribute('class', 'col-8 text-left d-flex align-items-center justify-content-between');
                name_img.setAttribute('style', 'font-size: .7rem;');

                //var equis = document.createElement('button');
                //equis.setAttribute('type', 'button');
                //equis.setAttribute('class', 'fa fa-solid fa-xmark btn btn-light');

                /*equis.onclick = function(){
                    var index_element_array = image_files.indexOf(image);
                    image_files.splice(index_element_array, 1);
                    this.closest('div.col-6').remove();
                };*/

                var create_text_node = document.createTextNode(image.name);
                name_img.appendChild(create_text_node);
                //name_img.appendChild(equis);

                logo_img.appendChild(img);
                row_img.appendChild(logo_img);
                row_img.appendChild(name_img);
                box_img.appendChild(row_img);

                content_img.appendChild(box_img);

                img.onload = function() {
                    URL.revokeObjectURL(img.src) // free memory
                };

                return content_img;
            }
        </script>
    </div>
@endsection