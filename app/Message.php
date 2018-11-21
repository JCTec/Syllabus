<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Message extends Eloquent
{
    protected $collection = 'messages';

    protected $primaryKey = '_id';

    protected $fillable = [
        'chatID', 'userID','text', 'origin'
    ];

}
