<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Maestro extends Model
{
    protected $connection = 'mi_proyecto';
    protected $table = 'maestros';

    protected $fillable = [
        'nombre', 'correo', 'materia'
    ];
}
