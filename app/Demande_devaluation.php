<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Demande_devaluation extends Pivot
{
    public $incrementing = true;
    
    /*public function test(){
        return $this->belongsTo('App\Test');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }*/
}
