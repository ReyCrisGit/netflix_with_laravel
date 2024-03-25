<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Notificacion extends Model
{
    use HasFactory;

    protected $table = "notificaciones";

    public function perfil(): BelongsTo {
        return $this->belongsTo(Perfil::class, 'perfil_id');
    }

    protected $fillable = [
        'mensaje',
    ];
}
