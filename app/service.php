<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function image(){
        return $this->belongsTo('App\Image');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }
}
