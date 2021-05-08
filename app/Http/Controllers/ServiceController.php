<?php

namespace App\Http\Controllers;
use App\service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
   /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('services');
    }
    public function services(){
        $services = service::inRandomOrder()->limit(10)->get();
        return view('services' , ['Services' => $services]);
    }
}
