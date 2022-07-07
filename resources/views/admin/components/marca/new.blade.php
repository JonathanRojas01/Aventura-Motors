@extends('admin.app')

@section('main')
    <div class="container">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center mb-3">
            <div class="d-block mb-4 mb-md-0">
                <h2 class="h4">Crear nueva marca</h2>
            </div>
        </div>
        <div class="card shadow">
            <div class="card-body">
                <form action="{{ route('marca.store') }}" method="POST" enctype='multipart/form-data'>
                    @csrf
                    <div class="row mb-3">
                        <div class="col">
                            <label for="nombre">Nombre:</label>
                            <input type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" id="nombre" required placeholder="Nombre de la nueva marca" @error('nombre') autofocus @enderror value="{{ old('nombre') }}">
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col">
                            <label class="form-label" for="logo">Logo:</label>
                            <input type="file" class="form-control @error('logo') is-invalid @enderror" id="logo" name="logo" required>
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
                                Crear marca
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection