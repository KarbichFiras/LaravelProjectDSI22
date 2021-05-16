<?php

namespace App\Http\Controllers;
use App\User;
use App\role_user;
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
    public function index(){     
        return view('admin.users.index' , ['users' => User::paginate(15)]);
    }
    public function create(){     
        return view('admin.users.create');
    }
    public function show($id){
        $user = User::find($id);
        return view('admin.users.show', ['user' => $user]);
    }
    
    public function userRoles(){
        $userRoles = role_user::inRandomOrder()->limit(10)->get();        
        return view('/userRoles');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = User::findOrFail($id);
        $data->delete();
    }
}
