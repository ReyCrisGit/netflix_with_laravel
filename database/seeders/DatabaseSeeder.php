<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(GeneroSerieSeeder::class);
        $this->call(PerfilSeeder::class);
        $this->call(SerieSeeder::class);
        $this->call(GeneroPeliculaSeeder::class);
        $this->call(PeliculaSeeder::class);
        $this->call(NotificacionSeeder::class);
        $this->call(PeliculaPerfilSeeder::class);
        $this->call(PerfilSerieSeeder::class);
    }
}
