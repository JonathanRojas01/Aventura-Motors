<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aventura Motors | admin</title>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>
    <main>
        <section class="vh-lg-100 mt-5 mt-lg-0 bg-soft d-flex justify-content-center justify-content-lg-end" style="background-repeat: no-repeat; background-size: 75% 75%; background-position: 0%; background-image: url('{{asset('images/cars.svg')}}')">
            <div class="bg-white shadow border-0 rounded border-light p-4 p-lg-5 w-100 fmxw-500">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="text-center">
                                <img src="{{ asset('images/aventura-motors.png') }}" alt="Aventura Motors" height="120">
                            </div>
                            <form action="" class="mt-4" method="POST">
                                @csrf
                                <div class="form-group mb-4">
                                    <label for="user">Tu usuario</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-white" id="basic-addon1">
                                            <i class="fa-solid fa-user"></i>
                                        </span>
                                        <input type="text" name="user" id="user" class="form-control @error('user') is-invalid @enderror" placeholder="Username" @if (!$errors->any()) autofocus @endif @error('user') autofocus @enderror value="{{ old('user') }}">
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="password">Tu contraseña</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-white" id="basic-addon2">
                                            <i class="fa-solid fa-key"></i>
                                        </span>
                                        <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" @error('password') autofocus @enderror>
                                    </div>
                                </div>
                                <div class="d-grid mb-4">
                                    <button type="submit" class="btn btn-gray-800">Iniciar sesión</button>
                                </div>
                                @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                    </ul>
                                </div>
                                @endif
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>