<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perfil;
use App\Models\Pelicula;

class PerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $perfiles = Perfil::all();
        return view('perfiles.index', compact('perfiles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $peliculas = Pelicula::all();
        return view('perfiles.create', compact('peliculas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $perfil = new Perfil();
        $perfil->nombre = $request->nombre;
        $perfil->idioma = $request->idioma;
        $perfil->alias = $request->alias;
        $perfil->correo = $request->correo;
        $perfil->contraseña = $request->contraseña;
        $perfil->save();
        return redirect()->action([PerfilController::class, 'index']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $perfil = Perfil::find($id);
        return view('perfiles.view', ['perfil' => $perfil]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $perfil = Perfil::find($id);
        $peliculas = Pelicula::all();
        return view('perfiles.create', compact('perfil', 'peliculas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $perfil = Perfil::find($id);
        $perfil->nombre = $request->nombre;
        $perfil->idioma = $request->idioma;
        $perfil->alias = $request->alias;
        $perfil->correo = $request->correo;
        $perfil->contraseña = $request->contraseña;
        $perfil->save();
        return redirect()->action([PerfilController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $perfil = Perfil::find($id);
        $perfil->delete();
        return redirect()->action([PerfilController::class, 'index']);
    }
}
