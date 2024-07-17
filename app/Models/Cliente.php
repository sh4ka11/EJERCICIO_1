<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public function proyectos()
    {
        return $this->belongsTo(Proyecto::class, 'realiza', 'cliente_id', 'proyecto_id');
    }

    use HasFactory;
}
