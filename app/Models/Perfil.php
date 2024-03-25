<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Perfil extends Model
{
    use HasFactory;

    protected $table = "perfiles";

    public function peliculas(): BelongsToMany {
        return $this->belongsToMany(Pelicula::class, 'pelicula_perfils', 'pelicula_id', 'perfil_id')->withTimestamps();
    }

    public function series(): BelongsToMany {
        return $this->belongsToMany(Serie::class, 'perfil_series', 'perfil_id', 'serie_id')->withTimestamps();
    }

    public function notificaciones(): HasMany {
        return $this->hasMany(Notificacion::class);
    }

    protected $fillable = [
        'nombre',
        'idioma',
        'alias',
        'correo',
        'contraseña',
    ];
}
