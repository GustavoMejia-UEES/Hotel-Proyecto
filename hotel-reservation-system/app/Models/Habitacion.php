<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habitacion extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero',
        'tipo',
        'capacidad',
        'precio_noche',
        'estado',
        'descripcion',
    ];
}
