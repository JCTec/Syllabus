<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Chat extends Eloquent
{
    protected $collection = 'chats';

    protected $primaryKey = '_id';

    protected $fillable = [
        'planDeEstudio',
    ];
}
