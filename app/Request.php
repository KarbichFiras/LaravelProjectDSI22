<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    public function User(){
        return $this->belongsTo('app\User');
    }
}
