<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CaracteristicaController;
use App\Http\Controllers\Admin\CategoriaController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MarcaController;
use App\Http\Controllers\Admin\VehiculoNuevoController;
use App\Http\Controllers\Admin\VehiculoUsadoController;
use App\Http\Controllers\Admin\VersionController;
use Illuminate\Support\Facades\Route;

/**
 * RUTAS ADMIN
 */
Route::prefix('/admin')->group(function(){

    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/login', [AuthController::class, 'authenticate']);
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

    Route::prefix('/marcas')->name('marca.')->group(function(){
        Route::get('/', [MarcaController::class, 'index'])->name('index');
        Route::get('/create', [MarcaController::class, 'create'])->name('create');
        Route::post('/', [MarcaController::class, 'store'])->name('store');
        Route::get('/{marca}', [MarcaController::class, 'show'])->name('show');
        Route::put('/{marca}', [MarcaController::class, 'update'])->name('update');
        Route::delete('/{marca}', [MarcaController::class, 'destroy'])->name('destroy');
    });

    Route::resource('/categorias', CategoriaController::class)->except(['edit']);

    Route::resource('/caracteristicas', CaracteristicaController::class)->except(['edit']);
    
    Route::prefix('/vehiculos')->name('vehiculos.')->group(function(){
        Route::view('/', 'admin.components.auto.index')->middleware('auth')->name('index');
        Route::resource('/nuevos', VehiculoNuevoController::class);
        Route::resource('/usados', VehiculoUsadoController::class);
    });

    Route::resource('/versiones', VersionController::class)->except(['edit']);
});


/**
 * RUTAS PUBLICAS
 */
Route::view('/', 'public.index');
Route::view('/nuevos', 'public.page-nuevos')->name('page-nuevos');
Route::view('/usados', 'public.page-usados')->name('page-usados');
Route::view('/sala-ventas', 'public.page-sala-ventas')->name('page-sala-ventas');
Route::view('/servicio-tecnico', 'public.page-servicio-tecnico')->name('page-servicio-tecnico');
Route::view('/desabolladura', 'public.page-desabolladura')->name('page-desabolladura');
Route::view('/otros', 'public.page-otros')->name('page-otros');
Route::view('/contacto', 'public.page-contacto')->name('page-contacto');
Route::view('/single-car', 'public.single-car')->name('single-car');
Route::view('/single-marca', 'public.single-marca')->name('single-marca');