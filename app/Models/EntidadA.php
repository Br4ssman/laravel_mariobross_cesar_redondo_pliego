<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; // Importante
use Illuminate\Database\Eloquent\Model;

class EntidadA extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'tipo', 'poder', 'mundo'];

    public function entidadBs() {
        return $this->hasMany(EntidadB::class);
    }
}