<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Serie extends Model
{
    use HasFactory;

    protected $table = "series";

    public function perfiles(): BelongsToMany {
        return $this->belongsToMany(Perfil::class, 'perfil_series', 'perfil_id', 'serie_id')->withTimestamps();
    }

    public function genero_serie(): BelongsTo {
        return $this->belongsTo(GeneroSerie::class, 'genero_serie_id');
    }

    protected $fillable = [
        'nombre',
        'temporadas',
        'episodios',
        'sinopsis',
        'duracion',
        'genero_serie_id',
        'en_lista',
        'like_count',
    ];
}
