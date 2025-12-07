<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $connection = 'mi_proyecto';
    protected $table = 'alumnos';

    protected $fillable = [
        'nombre', 'correo', 'telefono', 'lenguaje'
    ];
}
