@extends('admin.app')

@section('main')
    <div class="container">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center mb-3">
            <div class="d-block mb-4 mb-md-0">
                <h2 class="h4">Lista de Caracteristicas</h2>
            </div>
            <div class="btn-toolbar mb-2 mb-md-0">
                <a href="{{ route('caracteristicas.create') }}" class="btn btn-gray-800 d-inline-flex align-items-center">
                    <i class="fa-solid fa-plus me-3"></i>
                    Nueva caracteristica
                </a>
            </div>
        </div>
        @if(session('caracteristica_created'))
        <div class="alert alert-success mb-3" role="alert">
            {{ session('caracteristica_created') }}
        </div>
        @endif
        @if(session('caracteristica_updated'))
        <div class="alert alert-success mb-3" role="alert">
            {{ session('caracteristica_updated') }}
        </div>
        @endif
        @if(session('caracteristica_deleted'))
        <div class="alert alert-warning mb-3" role="alert">
            {{ session('caracteristica_deleted') }}
        </div>
        @endif
        <div class="card shadow table-wrapper table-responsive">
            <div class="card-body">
                @if(sizeof($caracteristicas) == 0)
                <div class="d-flex justify-content-center align-items-center flex-column" style="min-height: 200px">
                    <p class="text-center lead mb-3">No hay caracteristicas registradas</p>
                    <a href="{{ route('caracteristicas.create') }}" class="btn btn-gray-800 d-inline-flex align-items-center">
                        <i class="fa-solid fa-plus me-3"></i>
                        Nueva caracteristica
                    </a>
                </div>
                @else
                <ul class="list-group list-group-flush">
                    @foreach($caracteristicas as $caracteristica)
                    <li class="list-group-item d-flex align-items-center">
                        <div class="row w-100">
                            <div class="col d-flex align-items-center">
                                <div class="">
                                    <a href="{{ route('caracteristicas.show', ['caracteristica' => $caracteristica->id]) }}" class="">
                                        <span>{{ $caracteristica->nombre }}</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div>
                                <form action="{{ route('caracteristicas.destroy', ['caracteristica' => $caracteristica->id]) }}" method="POST">
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