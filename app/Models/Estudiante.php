<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $fillable = [
        'nombre',
        'email',
        'telefono',
        'direccion',
        'ciudad',
        'pais',
        'fecha_nacimiento',
        'genero',
    ];
    use HasFactory;
}
