<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class GeneroPelicula extends Model
{
    use HasFactory;
    
    protected $table = "generos_peliculas";

    public function peliculas(): HasMany {
        return $this->hasMany(Pelicula::class);
    }

    protected $fillable = [
        'nombre',
    ];
}
