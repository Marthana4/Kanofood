<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function halamanlogin(){
        return view('Login.Login-aplikasi');
    }

    public function postlogin(Request $req){
       if(Auth::attempt($req->only('email','password'))){
           return redirect('/home');
       }
       return redirect('/login');
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
     }

     public function register(){
         return view('Login.register');
     }
     
     public function simpanregister(Request $req){
        User::create([
            'name'=>$req->name,
            'level'=>'customer',
            'email'=>$req->email,
            'password'=>bcrypt($req->password),
            'remember_token'=> Str::random(60),
        ]);
        return view('welcome');
    }
}
