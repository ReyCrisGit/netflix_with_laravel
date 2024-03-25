<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelicula;

class PeliculaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peliculas = Pelicula::all();
        foreach ($peliculas as $pelicula) {
            $pelicula->genero_nombre = $this->getGeneroNombre($pelicula);
        }
        return view('peliculas.index', compact('peliculas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pelicula = Pelicula::find($id);
        //$pelicula = Pelicula::with('generos_peliculas')->find($id);
        return view('peliculas.view', ['pelicula' => $pelicula]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    /**
     * Funciones de buscar pelicula
     */
    public function search(Request $request)
    {
        $searchTerm = $request->input('search');

        $pelicula = Pelicula::where('nombre', 'like', '%'.$searchTerm.'%')->get();

        return view('peliculas.index', compact('pelicula'));
    }


    public function getGeneroNombre(Pelicula $pelicula)
    {
        // Accedemos a la relación 'genero_pelicula' definida en el modelo Pelicula
        $genero = $pelicula->genero_pelicula;
        
        // Si la relación existe, retornamos el nombre del género
        if ($genero) {
            return $genero->nombre;
        } else {
            // Si no hay relación, retorna un valor por defecto (opcional)
            return 'Sin género';
        }
    }

}
