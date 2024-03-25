<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Perfil;

class PerfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $perfil1 = new Perfil();
        $perfil1->nombre = "Santiago";
        $perfil1->idioma = "Español";
        $perfil1->alias = "El Unico";
        $perfil1->correo = "ejemplo@gmail.com";
        $perfil1->contraseña = "Santi123";
        $perfil1->save();

        $perfil2 = new Perfil();
        $perfil2->nombre = "Juan";
        $perfil2->idioma = "Español";
        $perfil2->alias = "Juanito";
        $perfil2->correo = "ejemplo2@gmail.com";
        $perfil2->contraseña = "Juanito123";
        $perfil2->save();

        $perfil3 = new Perfil();
        $perfil3->nombre = "Mari";
        $perfil3->idioma = "Español";
        $perfil3->alias = "Rex";
        $perfil3->correo = "ejemplo3@gmail.com";
        $perfil3->contraseña = "Mari123";
        $perfil3->save();
    }
}
