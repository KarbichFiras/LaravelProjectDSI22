<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    public function image(){
        return $this->belongsTo('App\Image');
    }

    public function demande_devaluations(){
        return $this->belongsToMany('App\User')->using('App\Demande_devaluation');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
