<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateVehiculoRequest;
use App\Models\Categoria;
use App\Models\Marca;
use App\Models\Vehiculo;
use Illuminate\Http\Request;

class VehiculoNuevoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehiculos_nuevos = Vehiculo::all();
        return view('admin.components.auto.nuevo.index', ['vehiculos_nuevos' => $vehiculos_nuevos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $marcas = Marca::all();
        $categorias = Categoria::all();
        return view('admin.components.auto.nuevo.new', ['marcas' => $marcas, 'categorias' => $categorias]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateVehiculoRequest $request)
    {
        $validated = $request->safe();

        $vehiculo = Vehiculo::create([
            'modelo'    => $validated['modelo'],
            'marca_id'  => $validated['marca'],
            'categoria_id'  => $validated['categoria'],
            'estado' => 1, // nuevo
        ]);

        foreach ($request->imagenes as $imagen) {
            $path_image = $imagen->store('images/vehiculos');

            $vehiculo->imagenes()->create([
                'ruta_archivo' => $path_image,
            ]);
        }

        return redirect()->route('vehiculos.nuevos.index')->with('vehiculo_nuevo_created', 'Se creo el vehículo ' . $validated['modelo']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Vehiculo $nuevo)
    {
        $marcas = Marca::all();
        $categorias = Categoria::all();
        return view('admin.components.auto.nuevo.show', ['vehiculo' => $nuevo, 'marcas' => $marcas, 'categorias' => $categorias]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
