<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Competencia extends Eloquent
{
    protected $collection = 'competencias';

    protected $primaryKey = '_id';

    protected $fillable = [
        'COMPETENCIA','ALIAS','DESCRIPCION','CARERRA',
    ];
}
