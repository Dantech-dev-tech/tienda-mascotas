<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Articulo;
use Illuminate\Http\Request;

class ArticuloController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         return Articulo::with('categoria')->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
        'categoria_id' => 'required|exists:categorias,id',
        'nombre' => 'required',
        'descripcion' => 'required',
        'precio' => 'required|numeric',
        'stock' => 'required|integer',
        'imagen' => 'nullable'
    ]);

    return Articulo::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         return Articulo::with('categoria')->findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $articulo = Articulo::findOrFail($id);

    $request->validate([
        'categoria_id' => 'required|exists:categorias,id',
        'nombre' => 'required',
        'descripcion' => 'required',
        'precio' => 'required|numeric',
        'stock' => 'required|integer',
        'imagen' => 'nullable',
    ]);

    $articulo->update($request->all());

    $articulo->load('categoria');

    return $articulo;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $articulo = Articulo::findOrFail($id);

    $articulo->delete();

    return response()->noContent();
    }
}
