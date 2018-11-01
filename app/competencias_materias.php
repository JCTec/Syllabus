<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class competencias_materias extends Eloquent
{
    protected $collection = 'competencias_materias';

    protected $primaryKey = '_id';

    protected $fillable = [
        'Materia','Competencia','Value',
    ];
}
