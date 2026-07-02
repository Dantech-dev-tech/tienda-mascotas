<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;

class PetController extends Controller
{
        
    /**
    * Listar y buscar mascotas por especie de forma paginada
    * @param Request $request
    * @return \Illuminate\View\View
    */
    public function index(Request $request)
    {
        $query = Pet::query();

        if ($request->has('buscar')) {
            $query->where('species', 'LIKE', '%' . $request->buscar . '%');
        }

        $pets = $query->latest()->paginate(5)->appends($request->query());

        return view('pets.index', compact('pets'));
    }

    /**
     * Método para mostrar el formulario de creación
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('pets.create');
    }

    /**
     * Método para guardar los datos
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'species' => 'required|string|max:255',
            'age' => 'required|integer|min:0',
        ]);

        Pet::create($request->all());

        return redirect()->route('pets.index')
            ->with('success', 'Mascota registradacorrectamente.');
    }
}