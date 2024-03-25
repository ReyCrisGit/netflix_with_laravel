<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notificacion;

class NotificacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notificaciones = Notificacion::all();
        foreach ($notificaciones as $notificacion) {
            $notificacion->perfil = $this->getPerfil($notificacion);
        }
        return view('notificaciones.index', compact('notificaciones'));
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
        $notificacion = Notificacion::find($id);
        return view('notificacion.view', ['notificacion' => $notificacion]);
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


    public function getPerfil(Notificacion $notificacion)
    {
        // Accedemos a la relación 'perfil' definida en el modelo Notificacion
        $perfil = $notificacion->perfil;

        // Si la relación existe, retornamos el nombre del perfil
        if ($perfil) {
            return $perfil->nombre;
        } else {
            // Si no hay relación, retorna un valor por defecto (opcional)
            return 'Sin perfil';
        }
    }

}
