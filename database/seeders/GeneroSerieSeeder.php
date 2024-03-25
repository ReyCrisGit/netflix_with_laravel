<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\GeneroSerie;

class GeneroSerieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genero1 = new GeneroSerie();
        $genero1->nombre = "Drama";
        $genero1->save();

        $genero2 = new GeneroSerie();
        $genero2->nombre = "Comedia";
        $genero2->save();

        $genero3 = new GeneroSerie();
        $genero3->nombre = "Thiller";
        $genero3->save();

        $genero4 = new GeneroSerie();
        $genero4->nombre = "Histórico";
        $genero4->save();

        $genero5 = new GeneroSerie();
        $genero5->nombre = "Romance";
        $genero5->save();
    }
}
