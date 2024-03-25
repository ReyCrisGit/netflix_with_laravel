<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pelicula;
use App\Models\Perfil;
use App\Models\PeliculaPerfil;

class PeliculaPerfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Obtener las películas y perfiles
        $peliculas = Pelicula::all();
        $perfiles = Perfil::all();

        // Asociar películas a los perfiles de forma aleatoria
        foreach ($perfiles as $perfil) {
            for ($i = 0; $i < rand(1, 5); $i++) {
                $pelicula = $peliculas->random();

                // Asegurar que no se dupliquen las asociaciones
                if (!$perfil->peliculas->contains($pelicula)) {
                    PeliculaPerfil::create([
                        'pelicula_id' => $pelicula->id,
                        'perfil_id' => $perfil->id,
                    ]);
                }
            }
        }
    }
}
