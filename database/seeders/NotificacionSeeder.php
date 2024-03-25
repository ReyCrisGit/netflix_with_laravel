<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Perfil;
use App\Models\Notificacion;

class NotificacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $perfiles = Perfil::all();

        // Create a random number of notifications for each profile
        foreach ($perfiles as $perfil) {
            for ($i = 0; $i < rand(1, 5); $i++) {
                // Generate a notification message
                $mensaje = $this->crearMensajeRandom();

                Notificacion::create([
                    'mensaje' => $mensaje,
                    'perfil_id' => $perfil->id,
                ]);
            }
        }
    }
    // Helper function to create a random notification message
    private function crearMensajeRandom(): string
    {
        $mensajes = [
            "Una nueva película ha sido añadida a tu lista de recomendaciones.",
            "Has recibido un nuevo mensaje de un amigo.",
            "Tu serie favorita ha estrenado un nuevo episodio.",
            "Alguien ha comentado en una de tus publicaciones.",
            "Tienes una nueva solicitud de amistad.",
        ];

        return $mensajes[array_rand($mensajes)];
    }
}
