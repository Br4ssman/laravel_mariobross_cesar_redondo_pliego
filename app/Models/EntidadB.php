<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; // Importante
use Illuminate\Database\Eloquent\Model;

class EntidadB extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'tipo', 'nivel', 'entidad_a_id'];

    public function entidadA() {
        return $this->belongsTo(EntidadA::class);
    }
}
