<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Perfil;
use App\Models\Serie;
use Illuminate\Database\Seeder;
use App\Models\PerfilSerie;

class PerfilSerieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Obtener los perfiles y series
        $perfiles = Perfil::all();
        $series = Serie::all();

        // Asociar series a los perfiles de forma aleatoria
        foreach ($perfiles as $perfil) {
            for ($i = 0; $i < rand(1, 5); $i++) {
                $serie = $series->random();

                // Asegurar que no se dupliquen las asociaciones
                if (!$perfil->series->contains($serie)) {
                    PerfilSerie::create([
                        'perfil_id' => $perfil->id,
                        'serie_id' => $serie->id,
                    ]);
                }
            }
        }
    }
}
