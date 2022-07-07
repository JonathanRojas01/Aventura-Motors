@extends('admin.app')

@section('main')
    <div class="container">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center mb-3">
            <div class="d-block mb-4 mb-md-0">
                <h2 class="h4">Vehículos nuevos</h2>
            </div>
            <div class="btn-toolbar mb-2 mb-md-0">
                <a href="{{ route('vehiculos.nuevos.create') }}" class="btn btn-gray-800 d-inline-flex align-items-center">
                    <i class="fa-solid fa-plus me-3"></i>
                    Nuevo Vehículo
                </a>
            </div>
        </div>
        @if(session('vehiculo_nuevo_created'))
        <div class="alert alert-success mb-3" role="alert">
            {{ session('vehiculo_nuevo_created') }}
        </div>
        @endif
        @if(session('vehiculo_nuevo_updated'))
        <div class="alert alert-success mb-3" role="alert">
            {{ session('vehiculo_nuevo_updated') }}
        </div>
        @endif
        @if(session('vehiculo_nuevo_deleted'))
        <div class="alert alert-warning mb-3" role="alert">
            {{ session('vehiculo_nuevo_deleted') }}
        </div>
        @endif
        <div class="card shadow table-wrapper table-responsive">
            <div class="card-body">
                @if(sizeof($vehiculos_nuevos) == 0)
                <div class="d-flex justify-content-center align-items-center flex-column" style="min-height: 200px">
                    <p class="text-center lead mb-3">No hay vehículos registrados</p>
                    <a href="{{ route('vehiculos.nuevos.create') }}" class="btn btn-gray-800 d-inline-flex align-items-center">
                        <i class="fa-solid fa-plus me-3"></i>
                        Nuevo Vehículo
                    </a>
                </div>
                @else
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Modelo</th>
                            <th>Marca</th>
                            <th>Categoría</th>
                            <th>N° imágenes</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($vehiculos_nuevos as $vehiculo)
                        <tr>
                            <td>{{ $vehiculo->id }}</td>
                            <td><a class="" href="{{ route('vehiculos.nuevos.show', ['nuevo' => $vehiculo->id]) }}">{{ $vehiculo->modelo }}</a></td>
                            <td>{{ $vehiculo->marca->nombre }}</td>
                            <td>{{ $vehiculo->categoria->nombre }}</td>
                            <td>{{ count($vehiculo->imagenes) }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @endif
            </div>
        </div>
    </div>
@endsection