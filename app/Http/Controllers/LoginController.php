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
        return redirect('/')->with('toast_error','Username or Password is wrong');
    }
    public function logout(){
        Auth::logout();
        return redirect('/');
     }

     public function register(){
         return view('Login.register');
     }
     
     public function simpanregister(Request $req){
        User::create([
            'name'=>$req->name,
            'no_hp'=>$req->no_hp,
            'gender'=>$req->gender,
            'tanggal_lahir'=>$req->tanggal_lahir,
            'level'=>'customer',
            'email'=>$req->email,
            'password'=>bcrypt($req->password),
            'remember_token'=> Str::random(60),
        ]);
        return redirect('/register')->with('success', 'Registrasi Berhasil, Silahkan Log In!');
    }
}
