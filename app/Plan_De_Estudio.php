<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class Plan_De_Estudio extends Eloquent
{
    protected $table = 'planDeStudio';

    protected $primaryKey = '_id';

    protected $fillable = [
        'carrera','codigo_plan', 'numero_semestres', 'division',
    ];

}

