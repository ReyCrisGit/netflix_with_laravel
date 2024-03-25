<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\GeneroPelicula;

class GeneroPeliculaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genero1 = new GeneroPelicula();
        $genero1->nombre = "Comedia";
        $genero1->save();

        $genero2 = new GeneroPelicula();
        $genero2->nombre = "Dama";
        $genero2->save();

        $genero3 = new GeneroPelicula();
        $genero3->nombre = "Thriller";
        $genero3->save();

        $genero4 = new GeneroPelicula();
        $genero4->nombre = "Terror";
        $genero4->save();

        $genero5 = new GeneroPelicula();
        $genero5->nombre = "Animación";
        $genero5->save();
    }
}
