<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateMarcaRequest;
use App\Http\Requests\UpdateMarcaRequest;
use App\Models\Marca;
use Illuminate\Support\Facades\Storage;

class MarcaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $marcas = Marca::all();

        return view('admin.components.marca.index', ['marcas' => $marcas]);
    }

    public function create()
    {
        return view('admin.components.marca.new');
    }

    public function store(CreateMarcaRequest $request)
    {
        $validated = $request->safe();
        $file = $request->logo->store('images/marcas');

        Marca::create([
            'nombre' => $validated['nombre'],
            'logo'  => $file,
        ]);

        return redirect()->route('marca.index')->with('marca_created', 'Se creo la marca ' . $validated['nombre']);
    }

    public function show(Marca $marca)
    {
        return view('admin.components.marca.show', ['marca' => $marca]);
    }

    public function update(Marca $marca, UpdateMarcaRequest $request)
    {
        $validated = $request->safe();

        if ($request->hasFile('logo')) {
            Storage::delete($marca->logo);
            $marca->logo = $request->logo->store('images/marcas');
        }

        $marca->nombre = $validated['nombre'];
        $marca->save();

        return redirect()->route('marca.index')->with('marca_updated', 'Se modifico la marca ' . $validated['nombre']);
    }

    public function destroy(Marca $marca)
    {
        Storage::delete($marca->logo);
        $nombre_marca = $marca->nombre;
        $marca->delete();
        return back()->with('marca_deleted', 'Se elimino la marca: '. $nombre_marca);
    }
}
