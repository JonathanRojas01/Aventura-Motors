<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateCaracteristicaRequest;
use App\Models\Caracteristica;
use Illuminate\Http\Request;

class CaracteristicaController extends Controller
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
        $caracteristicas = Caracteristica::all();
        return view('admin.components.caracteristica.index', ['caracteristicas' => $caracteristicas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.components.caracteristica.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCaracteristicaRequest $request)
    {
        $validated = $request->safe();

        Caracteristica::create([
            'nombre' => $validated['nombre'],
        ]);

        return redirect()->route('caracteristicas.index')->with('caracteristica_created', 'Se creo la caracteristica ' . $validated['nombre']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Caracteristica $caracteristica)
    {
        return view('admin.components.caracteristica.show', ['caracteristica' => $caracteristica]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateCaracteristicaRequest $request, Caracteristica $caracteristica)
    {
        $validated = $request->safe();
        $caracteristica->nombre = $validated['nombre'];
        $caracteristica->save();

        return redirect()->route('caracteristicas.index')->with('caracteristica_updated', 'Se modifico la caracteristica ' . $validated['nombre']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Caracteristica $caracteristica)
    {
        $nombre_caracteristica = $caracteristica->nombre;
        $caracteristica->delete();
        return back()->with('caracteristica_deleted', 'Se elimino la caracteristica: '. $nombre_caracteristica);
    }
}
