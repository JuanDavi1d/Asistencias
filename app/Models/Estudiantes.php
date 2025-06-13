<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiantes extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'apellido',
        'email',
        'telefono',
        'fecha_nacimiento',
        'direccion',
        'estado',
        'nivel_estudio',
        'genero',
        'documento_identidad',
        'observaciones',
        'codigo_estudiante',
        'grado',
        'padre_apoderado',
        'telefono_padre_apoderado'
    ];
}
