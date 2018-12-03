<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\HybridRelations;

class UserLogs extends Model
{
    use HybridRelations;

    protected $connection = 'mysql';

    protected $table = 'user_logs';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ip', 'email', 'passwordError', 'emailNotFound',
    ];

}
