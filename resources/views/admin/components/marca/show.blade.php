@extends('admin.app')

@section('main')
    <div class="container">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center mb-3">
            <div class="d-block mb-4 mb-md-0">
                <h2 class="h4">Marca <b>{{ $marca->nombre }}</b></h2>
            </div>
        </div>
        <div class="card shadow">
            <div class="card-body row">
                <div class="col-md-4">
                    <div class="text-center p-5">
                        <img src="{{ asset('storage/'. $marca->logo) }}" alt="{{ $marca->nombre }}" width="100%">
                    </div>
                </div>
                <div class="col-md-8">                    
                    <form action="{{ route('marca.update', ['marca' => $marca->id]) }}" method="POST" enctype='multipart/form-data'>
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <div class="col">
                                <label for="nombre">Nombre:</label>
                                <input type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" id="nombre" required placeholder="Nombre de la nueva marca" @error('nombre') autofocus @enderror value="{{ $marca->nombre }}">
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="col">
                                <label class="form-label" for="logo">Logo:</label>
                                <input type="file" class="form-control @error('logo') is-invalid @enderror" id="logo" name="logo">
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
                                    Editar marca
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection