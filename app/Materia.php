<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Materia extends Eloquent
{
    protected $collection = 'materias';

    protected $primaryKey = '_id';

    protected $fillable = [
        'CARRERA','BLOQUE','SEMESTRE','ASIGNATURA','CLAVE', 'CREDITOS', 'GRADO', 'COMPETENCIAS', 'COLUMNA'
    ];
}
