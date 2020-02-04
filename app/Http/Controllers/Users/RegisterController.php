<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterUser;
use App\User;

class RegisterController extends Controller
{
    public function __construct(){
        $this->middleware('guest');
    }

    public function form(){
        return view('users.register');
    }

    public function register(RegisterUser $request){
        $newUser = User::create([
            'username'=>$request->input('username'),
            'password'=>bcrypt($request->input('password')),
            'email'=>$request->input('email'),
            'role_id'=>1,
        ]);
        if($newUser){            
            $request->session()->flash('success', 'Your account has been created successfully');
            return response()->json($newUser, 200);
        }
        return response()->json("Error", 422);
    }
}
