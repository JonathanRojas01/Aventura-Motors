@extends('admin.app')

@section('main')
    <div class="container">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center mb-3">
            <div class="d-block mb-4 mb-md-0">
                <h2 class="h4">Versiones de vehículos</h2>
            </div>
            <div class="btn-toolbar mb-2 mb-md-0">
                <a href="{{ route('versiones.create') }}" class="btn btn-gray-800 d-inline-flex align-items-center">
                    <i class="fa-solid fa-plus me-3"></i>
                    Nueva versión
                </a>
            </div>
        </div>
        @if(session('version_created'))
        <div class="alert alert-success mb-3" role="alert">
            {{ session('version_created') }}
        </div>
        @endif
        @if(session('version_updated'))
        <div class="alert alert-success mb-3" role="alert">
            {{ session('version_updated') }}
        </div>
        @endif
        @if(session('version_deleted'))
        <div class="alert alert-warning mb-3" role="alert">
            {{ session('version_deleted') }}
        </div>
        @endif
        <div class="card shadow table-wrapper table-responsive">
            <div class="card-body">
                @if(sizeof($versiones) == 0)
                <div class="d-flex justify-content-center align-items-center flex-column" style="min-height: 200px">
                    <p class="text-center lead mb-3">No hay versiones registradas</p>
                    <a href="{{ route('versiones.create') }}" class="btn btn-gray-800 d-inline-flex align-items-center">
                        <i class="fa-solid fa-plus me-3"></i>
                        Nueva versión
                    </a>
                </div>
                @else
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Versión</th>
                            <th>Tipo</th>
                            <th>Precio lista</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($versiones as $version)
                        <tr>
                            <td>{{ $version->id }}</td>
                            <td>{{ $version->vehiculo->marca->nombre }}</td>
                            <td>{{ $version->vehiculo->modelo }}</td>
                            <td><a class="" href="{{ route('versiones.show', ['version' => $version->id]) }}">{{ $version->nombre }}</a></td>
                            <td>{{ $version->tipo }}</td>
                            <td>{{ number_format($version->precio_lista, 2, '.', ',') }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @endif
            </div>
        </div>
    </div>
@endsection