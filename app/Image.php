<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function test(){
        return $this->hasOne('App\Image');;
    }
}
