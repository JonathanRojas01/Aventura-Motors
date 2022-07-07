@extends('admin.app')

@section('main')
    <div class="container">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center mb-3">
            <div class="d-block mb-4 mb-md-0">
                <h2 class="h4">Gestion de vehículos</h2>
            </div>
        </div>
        <div class="row" id="gestion-vehiculos">
            <div class="col-md-4">
                <a href="{{ route('vehiculos.nuevos.index') }}" class="text-decoration-none text-secondary">
                    <div class="card card-vehiculo shadow mb-3">
                        <div class="card-body p-5 d-flex justify-content-center align-items-center flex-column">
                            <i class="fa-solid fa-car-side icon mb-3"></i>
                            <h4>Vehículos nuevos</h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="{{ route('vehiculos.usados.index') }}" class="text-decoration-none text-secondary">
                    <div class="card card-vehiculo shadow mb-3">
                        <div class="card-body p-5 d-flex justify-content-center align-items-center flex-column">
                            <i class="fa-solid fa-taxi icon mb-3"></i>
                            <h4>versiones</h4>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection