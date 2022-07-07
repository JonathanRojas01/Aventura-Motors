@extends('admin.app')

@section('main')
    <div class="container">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center mb-3">
            <div class="d-block mb-4 mb-md-0">
                <h2 class="h4">Lista de Categorias</h2>
            </div>
            <div class="btn-toolbar mb-2 mb-md-0">
                <a href="{{ route('categorias.create') }}" class="btn btn-gray-800 d-inline-flex align-items-center">
                    <i class="fa-solid fa-plus me-3"></i>
                    Nueva categoria
                </a>
            </div>
        </div>
        @if(session('categoria_created'))
        <div class="alert alert-success mb-3" role="alert">
            {{ session('categoria_created') }}
        </div>
        @endif
        @if(session('categoria_updated'))
        <div class="alert alert-success mb-3" role="alert">
            {{ session('categoria_updated') }}
        </div>
        @endif
        @if(session('categoria_deleted'))
        <div class="alert alert-warning mb-3" role="alert">
            {{ session('categoria_deleted') }}
        </div>
        @endif
        <div class="card shadow table-wrapper table-responsive">
            <div class="card-body">
                @if(sizeof($categorias) == 0)
                <div class="d-flex justify-content-center align-items-center flex-column" style="min-height: 200px">
                    <p class="text-center lead mb-3">No hay categorias registradas</p>
                    <a href="{{ route('categorias.create') }}" class="btn btn-gray-800 d-inline-flex align-items-center">
                        <i class="fa-solid fa-plus me-3"></i>
                        Nueva categoria
                    </a>
                </div>
                @else
                <ul class="list-group list-group-flush">
                    @foreach($categorias as $categoria)
                    <li class="list-group-item d-flex align-items-center">
                        <div class="row w-100">
                            <div class="col d-flex align-items-center">
                                <div class="">
                                    <a href="{{ route('categorias.show', ['categoria' => $categoria->id]) }}" class="text-decoration-none text-secondary">
                                        <span>{{ $categoria->nombre }}</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div>
                                <form action="{{ route('categorias.destroy', ['categoria' => $categoria->id]) }}" method="POST">
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