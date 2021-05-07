<?php

namespace App\Http\Controllers;
use App\User;
use App\user_role;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('userRoles');
        $this->middleware('auth')->except('users');
    }
    public function users(){
        $users = User::inRandomOrder()->limit(10)->get();        
        return view('users' , ['users' => $users]);
    }
    public function userRoles(){
        $userRoles = user_role::inRandomOrder()->limit(10)->get();        
        return view('userRoles' , ['user_roles' => $userRoles]);
    }
}
