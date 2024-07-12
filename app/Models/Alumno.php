<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    // Definir la tabla asociada al modelo
    protected $table = 'alumnos';
    protected $fillable = ['nombre','curso','nota1','nota2','promedio','condicion'];

}
