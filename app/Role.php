<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    protected $table = "users_role";

    public function user()
    {
        return $this->hasMany('App\User');
    }
}
