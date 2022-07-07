<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateCategoriaRequest;
use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
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
        $categorias = Categoria::all();
        return view('admin.components.categoria.index', ['categorias' => $categorias]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.components.categoria.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCategoriaRequest $request)
    {
        $validated = $request->safe();

        Categoria::create([
            'nombre' => $validated['nombre'],
        ]);

        return redirect()->route('categorias.index')->with('categoria_created', 'Se creo la categoria ' . $validated['nombre']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Categoria $categoria)
    {
        return view('admin.components.categoria.show', ['categoria' => $categoria]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateCategoriaRequest $request, Categoria $categoria)
    {
        $validated = $request->safe();
        $categoria->nombre = $validated['nombre'];
        $categoria->save();

        return redirect()->route('categorias.index')->with('categoria_updated', 'Se modifico la categoria ' . $validated['nombre']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categoria $categoria)
    {
        $nombre_categoria = $categoria->nombre;
        $categoria->delete();
        return back()->with('categoria_deleted', 'Se elimino la categoria: '. $nombre_categoria);
    }
}
