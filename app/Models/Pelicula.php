<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Pelicula extends Model
{
    use HasFactory;

    protected $table = "peliculas";

    public function perfiles(): BelongsToMany {
        return $this->belongsToMany(Perfil::class, 'pelicula_perfils', 'pelicula_id', 'perfil_id')->withTimestamps();
    }

    public function genero_pelicula(): BelongsTo {
        return $this->belongsTo(GeneroPelicula::class, 'genero_pelicula_id');
    }

    protected $fillable = [
        'nombre',
        'sinopsis',
        'duracion',
        'genero_pelicula_id',
        'en_lista',
        'like_count',
    ];
}
