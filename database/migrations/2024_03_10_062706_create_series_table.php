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
        Schema::create('series', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->unsignedBigInteger('temporadas');
            $table->unsignedBigInteger('episodios');
            $table->text('sinopsis');
            $table->time('duracion');
            $table->unsignedBigInteger('genero_serie_id');
            $table->boolean('en_lista')->default(false);
            $table->integer('like_count')->default(0);
            $table->timestamps();

            $table->foreign('genero_serie_id')->references('id')->on('generos_series')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('series');
    }
};
