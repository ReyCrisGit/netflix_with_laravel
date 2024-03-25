<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Serie;
use App\Models\GeneroSerie;

class SerieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $series = Serie::all();
        foreach ($series as $serie) {
            $serie->genero_nombre = $this->getGeneroNombre($serie);
        }
        return view('series.index', compact('series'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        /* $serie = Serie::all();
        $generoSerie = GeneroSerie::all();
        return view('series.create', compact('generoSerie')); */
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $serie = Serie::find($id);
        return view('series.view', ['serie' => $serie]);
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
     * Funcion de buscar serie
     */
    public function search(Request $request)
    {
        $searchTerm = $request->input('search');

        $series = Serie::where('nombre', 'like', '%'.$searchTerm.'%')->get();

        return view('series.index', compact('series'));
    }

    public function getGeneroNombre(Serie $serie)
    {
        // Accedemos a la relación 'genero_pelicula' definida en el modelo Pelicula
        $genero = $serie->genero_serie;
        
        // Si la relación existe, retornamos el nombre del género
        if ($genero) {
            return $genero->nombre;
        } else {
            // Si no hay relación, retorna un valor por defecto (opcional)
            return 'Sin género';
        }
    }
}
