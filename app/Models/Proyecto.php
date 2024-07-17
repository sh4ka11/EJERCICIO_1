<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    public function clientes()
    {
        return $this->belongsToMany(Cliente::class, 'realiza', 'proyecto_id', 'cliente_id');
    }

    use HasFactory;
}
