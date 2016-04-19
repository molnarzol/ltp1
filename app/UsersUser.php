<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersUser extends Model
{
    protected $fillable = [
        'first_name', 'last_name'
    ];

    public function user()
    {
        return $this->morphOne('App\User', 'userable');
    }
}
