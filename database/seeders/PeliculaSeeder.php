<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pelicula;

class PeliculaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pelicula1 = new Pelicula();
        $pelicula1->nombre = "Ocho apellidos vascos";
        $pelicula1->sinopsis = "Un hombre andaluz viaja al País Vasco para conocer a la mujer de la que se ha enamorado por internet.";
        $pelicula1->duracion = '01:20:00';
        $pelicula1->genero_pelicula_id = 1;
        $pelicula1->en_lista = false;
        $pelicula1->like_count = 80000;
        $pelicula1->save();

        $pelicula2 = new Pelicula();
        $pelicula2->nombre = "El gran Lebowski";
        $pelicula2->sinopsis = "Un pacífico desempleado se ve envuelto en un caso de identidad equivocada que lo lleva a ser confundido con un millonario y secuestrado por matones de verdad.";
        $pelicula2->duracion = '02:00:00';
        $pelicula2->genero_pelicula_id = 1;
        $pelicula2->en_lista = false;
        $pelicula2->like_count = 65000;
        $pelicula2->save();

        $pelicula3 = new Pelicula();
        $pelicula3->nombre = "El secreto de sus ojos";
        $pelicula3->sinopsis = "Un ex agente legal jubilado se propone escribir una novela sobre un caso sin resolver que lo atormentó durante años: la violación y el asesinato de una joven.";
        $pelicula3->duracion = '02:45:00';
        $pelicula3->genero_pelicula_id = 2;
        $pelicula3->en_lista = true;
        $pelicula3->like_count = 40000;
        $pelicula3->save();

        $pelicula4 = new Pelicula();
        $pelicula4->nombre = "Cinema Paradiso";
        $pelicula4->sinopsis = "Un exitoso director de cine regresa a su pueblo natal en Sicilia después de enterarse de la muerte de Alfredo, el operador del cine local de su infancia.";
        $pelicula4->duracion = '01:30:00';
        $pelicula4->genero_pelicula_id = 2;
        $pelicula4->en_lista = false;
        $pelicula4->like_count = 35000;
        $pelicula4->save();

        $pelicula5 = new Pelicula();
        $pelicula5->nombre = "La isla siniestra";
        $pelicula5->sinopsis = "Dos alguaciles estadounidenses son enviados a una remota isla en busca de un paciente desaparecido de un hospital psiquiátrico para criminales peligrosos.";
        $pelicula5->duracion = '02:04:00';
        $pelicula5->genero_pelicula_id = 3;
        $pelicula5->en_lista = false;
        $pelicula5->like_count = 28000;
        $pelicula5->save();

        $pelicula6 = new Pelicula();
        $pelicula6->nombre = "Contratiempo";
        $pelicula6->sinopsis = "Adrián Doria, un exitoso empresario, contrata a la prestigiosa abogada Virginia Goodman para que le ayude a demostrar su inocencia en la acusación del asesinato de su amante.";
        $pelicula6->duracion = '01:30:00';
        $pelicula6->genero_pelicula_id = 3;
        $pelicula6->en_lista = true;
        $pelicula6->like_count = 22000;
        $pelicula6->save();

        $pelicula7 = new Pelicula();
        $pelicula7->nombre = "[REC]";
        $pelicula7->sinopsis = "Un equipo de bomberos atiende un llamado de emergencia en un edificio de Barcelona, pero al llegar se dan cuenta de que han quedado encerrados con algo mucho más terrorífico que un simple incendio.";
        $pelicula7->duracion = '02:00:00';
        $pelicula7->genero_pelicula_id = 4;
        $pelicula7->en_lista = false;
        $pelicula7->like_count = 10000;
        $pelicula7->save();

        $pelicula8 = new Pelicula();
        $pelicula8->nombre = "Veronica";
        $pelicula8->sinopsis = "En 1991, un grupo de amigas juegan a la Ouija durante un eclipse solar. Tras el juego, una de las niñas comienza a experimentar aterradores eventos paranormales.";
        $pelicula8->duracion = '03:00:00';
        $pelicula8->genero_pelicula_id = 4;
        $pelicula8->en_lista = false;
        $pelicula8->like_count = 15000;
        $pelicula8->save();

        $pelicula9 = new Pelicula();
        $pelicula9->nombre = "Klaus";
        $pelicula9->sinopsis = "Un cartero egoísta es enviado a una isla congelada en el Ártico, donde encuentra la amistad y el verdadero significado de la Navidad.";
        $pelicula9->duracion = '02:45:00';
        $pelicula9->genero_pelicula_id = 5;
        $pelicula9->en_lista = false;
        $pelicula9->like_count = 50000;
        $pelicula9->save();

        $pelicula10 = new Pelicula();
        $pelicula10->nombre = "Coco";
        $pelicula10->sinopsis = "Un niño llamado Miguel sueña con convertirse en músico, pero su familia se lo prohíbe. En el Día de Muertos, Miguel viaja al mundo de los muertos para descubrir la verdad sobre su pasado y su futuro.";
        $pelicula10->duracion = '01:40:00';
        $pelicula10->genero_pelicula_id = 5;
        $pelicula10->en_lista = true;
        $pelicula10->like_count = 70000;
        $pelicula10->save();
    }
}
