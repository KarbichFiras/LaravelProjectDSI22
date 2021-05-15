<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function demande_devaluations(){
        return $this->belongsToMany('App\Test')->using('App\Demande_devaluation');
    }
    
    public function tests(){
        return $this->hasMany('App\Test');
    }

    public function images(){
        return $this->hasMany('App\Image');
    }
    public function user_roles(){
        return $this->belongsToMany('App\role')->using('App\user_role');
    }
    public function Services(){
        return $this->belongsToMany('App\Service');
    }
    public function Requests(){
        return $this->hasMany('app\Request');
    }
}
