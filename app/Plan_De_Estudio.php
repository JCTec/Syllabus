<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan_De_Estudio extends Model
{
    protected $table = 'planes_de_estudio';

    protected $primaryKey = 'id';

    protected $fillable = [
        'carrera','codigo',
    ];

}

