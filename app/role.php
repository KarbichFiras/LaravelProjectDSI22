<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    public function user_roles(){
        return $this->belongsToMany('App\user')->using('App\role_user');
    }
}
