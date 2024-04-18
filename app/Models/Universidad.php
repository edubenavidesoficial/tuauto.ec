<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Universidad extends Model
{
    use HasFactory;

    protected $table = 'universidades'; // Nombre de la tabla en la base de datos

    protected $fillable = [
        'nombre',
        'estado',
        'tipo_oferta_academica',
        'carrera',
    ];

    // Aquí podrías definir relaciones con otros modelos si es necesario
}
