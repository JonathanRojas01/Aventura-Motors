@extends('admin.app')

@section('main')
    <div class="container">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center mb-3">
            <div class="d-block mb-4 mb-md-0">
                <h2 class="h4">Crear nueva versión</h2>
            </div>
        </div>
        <form action="{{ route('versiones.store') }}" method="POST">
            <div class="row">
                <div class="col-md-6">
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
                                    <label class="form-label" for="modelo">Modelo:</label>
                                    <select name="modelo" id="modelo" class="form-select @error('modelo') is-invalid @enderror" required>
                                        <option disabled selected value style="font-style: italic">Elija un modelo...</option>
                                    </select>                                    
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <label class="form-label" for="nombre">Nombre de la versión:</label>
                                    <div class="input-group">
                                        <span id="prefijo-version" class="input-group-text"></span>
                                        <input type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" id="nombre" required @error('nombre') @enderror placeholder="Nombre de la versión" value="{{ old('nombre') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <label class="form-label" for="precio_lista">Precio lista:</label>
                                    <input type="text" class="form-control @error('precio_lista') is-invalid @enderror" name="precio_lista" id="precio_lista" required @error('precio_lista') @enderror placeholder="Precio lista" value="{{ old('precio_lista') }}">
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
                <div class="col-md-6">
                    <div class="card shadow mb-3">
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col">
                                    <label>Agregue las caracteristicas:</label>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-12">
                                    @if(sizeof($caracteristicas) == 0)
                                    <div class="row">
                                        <div class="d-flex justify-content-center align-items-center flex-column" style="min-height: 200px">
                                            <p class="text-center lead mb-3">No hay características registradas</p>
                                            <a href="{{ route('caracteristicas.create') }}" class="btn btn-gray-800 d-inline-flex align-items-center">
                                                <i class="fa-solid fa-plus me-3"></i>
                                                Crear nueva característica
                                            </a>
                                        </div>
                                    </div>
                                    @else
                                    <div class="">
                                        <div class="row caracteristica_new_item mb-4">
                                            <div class="col-4 mb-3">
                                                <select name="caracteristicas_id[]" class="form-select">
                                                    @foreach($caracteristicas as $caracteristica)
                                                    <option value="{{ $caracteristica->id }}">{{ $caracteristica->nombre }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-8 mb-3">
                                                <input type="text" name="caracteristicas_value[]" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="d-flex justify-content-center align-items-center flex-column">
                                                <button type="button" class="btn btn-outline-success d-inline-flex align-items-center">
                                                    <i class="fa-solid fa-plus me-3"></i>
                                                    Añadir característica
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary mt-3" type="submit">
                        <i class="fa-solid fa-floppy-disk me-3"></i>
                        Crear versión
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection