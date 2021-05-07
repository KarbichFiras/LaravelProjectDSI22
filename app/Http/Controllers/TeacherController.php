<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Test;

class TeacherController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('tests');
    }
    public function tests(){
        $tests = Test::inRandomOrder()->limit(6)->get();        
        return view('tests' , ['tests' => $tests]);
    }
}
