@extends('admin.app')

@section('main')
    <div class="container">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center mb-3">
            <div class="d-block mb-4 mb-md-0">
                <h2 class="h4">Modelo <b>{{ $vehiculo->marca->nombre . ' - ' . $vehiculo->modelo }}</b></h2>
            </div>
        </div>
        <div class="card shadow">
            <div class="card-body row">
                <div class="col-md-4 mb-3">
                    <form action="{{ route('vehiculos.nuevos.update', ['nuevo' => $vehiculo->id]) }}" method="POST" enctype='multipart/form-data'>
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <div class="col">
                                <label class="form-label" for="marca">Marca:</label>
                                <select name="marca" id="marca" class="form-select @error('marca') is-invalid @enderror" required>
                                    <option disabled value style="font-style: italic">Elija una marca...</option>
                                    @foreach($marcas as $marca)
                                    <option value="{{ $marca->id }}" @if($marca->id == $vehiculo->marca->id) selected @endif>{{ $marca->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label for="modelo">Modelo:</label>
                                <input type="text" class="form-control @error('modelo') is-invalid @enderror" name="modelo" id="modelo" required placeholder="Nombre del modelo" @error('modelo') autofocus @enderror value="{{ $vehiculo->modelo }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label class="form-label" for="categoria">Categoria:</label>
                                <select name="categoria" id="categoria" class="form-select @error('categoria') is-invalid @enderror" required>
                                    <option disabled value style="font-style: italic">Elija una categoria...</option>
                                    @foreach($categorias as $categoria)
                                    <option value="{{ $categoria->id }}" @if($categoria->id == $vehiculo->categoria->id) selected @endif>{{ $categoria->nombre }}</option>
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
                        <div class="row mb-3">
                            <div class="col">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fa-solid fa-floppy-disk me-3"></i>
                                    Editar vehículo
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-8 mb-3">
                    <div class="row mb-3">
                        <div class="col">
                            <label class="form-label">Imágenes:</label>
                            <hr>
                            <div class="d-flex">
                                @foreach($vehiculo->imagenes as $i => $imagen)
                                <div class="col-md-4">
                                    <div class="px-5 py-3 border">
                                        <img class="img-fluid" src="{{ asset('storage/'. $imagen->ruta_archivo) }}" alt="{{ $vehiculo->modelo . ' - ' .$i }}">
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection