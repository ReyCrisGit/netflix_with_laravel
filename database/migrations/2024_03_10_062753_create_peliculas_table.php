<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('peliculas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->text('sinopsis');
            $table->time('duracion');
            $table->unsignedBigInteger('genero_pelicula_id');
            $table->boolean('en_lista')->default(false);
            $table->integer('like_count')->default(0);
            $table->timestamps();

            $table->foreign('genero_pelicula_id')->references('id')->on('generos_peliculas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peliculas');
    }
};
