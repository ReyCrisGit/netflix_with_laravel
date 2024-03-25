<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class GeneroSerie extends Model
{
    use HasFactory;

    protected $table = "generos_series";

    public function series(): HasMany {
        return $this->hasMany(Serie::class);
    }

    protected $fillable = [
        'nombre',
    ];
}
