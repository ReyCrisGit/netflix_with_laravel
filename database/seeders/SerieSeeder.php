<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Serie;

class SerieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $serie1 = new Serie();
        $serie1->nombre = "La Casa de Papel";
        $serie1->temporadas = 5;
        $serie1->episodios = 41;
        $serie1->sinopsis = "Un grupo de atracadores, liderados por el Profesor, llevan a cabo un plan para asaltar la Fábrica Nacional de Moneda y Timbre.";
        $serie1->duracion = '00:50:00';
        $serie1->genero_serie_id = 1;
        $serie1->en_lista = true;
        $serie1->like_count = 100000;
        $serie1->save();

        $serie2 = new Serie();
        $serie2->nombre = "Vis a Vis";
        $serie2->temporadas = 4;
        $serie2->episodios = 40;
        $serie2->sinopsis = "Macarena Ferreiro, una mujer ingenua de clase alta, es condenada a prisión por un delito fiscal.";
        $serie2->duracion = '01:20:00';
        $serie2->genero_serie_id = 1;
        $serie2->en_lista = true;
        $serie2->like_count = 50000;
        $serie2->save();

        $serie3 = new Serie();
        $serie3->nombre = "Aquí no hay quien viva";
        $serie3->temporadas = 5;
        $serie3->episodios = 91;
        $serie3->sinopsis = "Las historias de los vecinos de una comunidad de propietarios de clase media en Madrid.";
        $serie3->duracion = '00:55:00';
        $serie3->genero_serie_id = 2;
        $serie3->en_lista = false;
        $serie3->like_count = 20000;
        $serie3->save();

        $serie4 = new Serie();
        $serie4->nombre = "La que se avecina";
        $serie4->temporadas = 13;
        $serie4->episodios = 50;
        $serie4->sinopsis = "Las historias de los vecinos de una comunidad de propietarios de clase media en Montepinar.";
        $serie4->duracion = '00:40:00';
        $serie4->genero_serie_id = 2;
        $serie4->en_lista = true;
        $serie4->like_count = 75000;
        $serie4->save();

        $serie4 = new Serie();
        $serie4->nombre = "Fariña";
        $serie4->temporadas = 1;
        $serie4->episodios = 10;
        $serie4->sinopsis = "La historia del narcotráfico en Galicia en los años 80, basada en el libro homónimo de Nacho Carretero.";
        $serie4->duracion = '00:24:00';
        $serie4->genero_serie_id = 3;
        $serie4->en_lista = true;
        $serie4->like_count = 30000;
        $serie4->save();

        $serie4 = new Serie();
        $serie4->nombre = "El Ministerio del Tiempo";
        $serie4->temporadas = 4;
        $serie4->episodios = 44;
        $serie4->sinopsis = "Un grupo de agentes del Ministerio del Tiempo tienen la misión de evitar que se altere la historia de España.";
        $serie4->duracion = '00:50:00';
        $serie4->genero_serie_id = 3;
        $serie4->en_lista = false;
        $serie4->like_count = 45000;
        $serie4->save();

        $serie4 = new Serie();
        $serie4->nombre = "Isabel";
        $serie4->temporadas = 3;
        $serie4->episodios = 39;
        $serie4->sinopsis = "La vida de Isabel I de Castilla, reina de España.";
        $serie4->duracion = '00:40:00';
        $serie4->genero_serie_id = 4;
        $serie4->en_lista = false;
        $serie4->like_count = 25000;
        $serie4->save();

        $serie4 = new Serie();
        $serie4->nombre = "Carlos, Rey Emperador";
        $serie4->temporadas = 6;
        $serie4->episodios = 54;
        $serie4->sinopsis = "La vida de Carlos I de España y V de Alemania, emperador del Sacro Imperio Romano Germánico.";
        $serie4->duracion = '00:40:00';
        $serie4->genero_serie_id = 4;
        $serie4->en_lista = false;
        $serie4->like_count = 30000;
        $serie4->save();

        $serie4 = new Serie();
        $serie4->nombre = "Velvet";
        $serie4->temporadas = 4;
        $serie4->episodios = 51;
        $serie4->sinopsis = "La historia de amor entre una joven costurera y el hijo del dueño de unas galerías comerciales en el Madrid de los años 60.";
        $serie4->duracion = '00:30:00';
        $serie4->genero_serie_id = 5;
        $serie4->en_lista = true;
        $serie4->like_count = 60000;
        $serie4->save();

        $serie4 = new Serie();
        $serie4->nombre = "Las Chicas del Cable";
        $serie4->temporadas = 5;
        $serie4->episodios = 42;
        $serie4->sinopsis = "La historia de cuatro mujeres que trabajan como telefonistas en la Compañía Telefónica Nacional de España en los años 20.";
        $serie4->duracion = '01:00:00';
        $serie4->genero_serie_id = 5;
        $serie4->en_lista = true;
        $serie4->like_count = 55000;
        $serie4->save();
    }
}
