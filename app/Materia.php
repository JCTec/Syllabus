<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    protected $table = 'materias';

    protected $primaryKey = 'id';

    protected $fillable = [
        'codigo','nombre','semestre','creditos','bloque'
    ];
}
