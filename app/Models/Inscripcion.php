<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{

    protected $fillable = [
        'estudiante_id',
        'curso_id',
        'fecha_inscripcion'
    ];

    // Relación con Estudiante
    public function estudiante()
    {
        return $this->belongsTo(Estudiante::class);
    }

    // Relación con Curso
    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }
}
