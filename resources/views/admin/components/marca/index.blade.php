@extends('admin.app')

@section('main')
    <div class="container">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center mb-3">
            <div class="d-block mb-4 mb-md-0">
                <h2 class="h4">Lista de marcas</h2>
            </div>
            <div class="btn-toolbar mb-2 mb-md-0">
                <a href="{{ route('marca.create') }}" class="btn btn-gray-800 d-inline-flex align-items-center">
                    <i class="fa-solid fa-plus me-3"></i>
                    Nueva marca
                </a>
            </div>
        </div>
        @if(session('marca_created'))
        <div class="alert alert-success mb-3" role="alert">
            {{ session('marca_created') }}
        </div>
        @endif
        @if(session('marca_updated'))
        <div class="alert alert-success mb-3" role="alert">
            {{ session('marca_updated') }}
        </div>
        @endif
        @if(session('marca_deleted'))
        <div class="alert alert-warning mb-3" role="alert">
            {{ session('marca_deleted') }}
        </div>
        @endif
        <div class="card shadow table-wrapper table-responsive">
            <div class="card-body">
                @if(sizeof($marcas) == 0)
                <div class="d-flex justify-content-center align-items-center flex-column" style="min-height: 200px">
                    <p class="text-center lead mb-3">No hay marcas registradas</p>
                    <a href="{{ route('marca.create') }}" class="btn btn-gray-800 d-inline-flex align-items-center">
                        <i class="fa-solid fa-plus me-3"></i>
                        Nueva marca
                    </a>
                </div>
                @else
                <ul class="list-group list-group-flush">
                    @foreach($marcas as $marca)
                    <li class="list-group-item d-flex align-items-center py-3">
                        <div class="row w-100">
                            <div class="col-2 d-flex align-items-center justify-content-center">
                                <div class="text-center">
                                    <a href="{{ route('marca.show', ['marca' => $marca->id]) }}" class="text-decoration-none text-secondary">
                                        <img src="{{ asset('storage/'. $marca->logo) }}" alt="{{ $marca->nombre }}" height="50">
                                    </a>
                                </div>
                            </div>
                            <div class="col-10 d-flex align-items-center">
                                <div class="">
                                    <a href="{{ route('marca.show', ['marca' => $marca->id]) }}" class="text-decoration-none text-secondary">
                                        <span>{{ $marca->nombre }}</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div>
                                <form action="{{ route('marca.destroy', ['marca' => $marca->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-danger btn btn-light">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
                @endif
            </div>
        </div>
    </div>
@endsection