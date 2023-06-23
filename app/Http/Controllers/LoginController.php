<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function halamanlogin (){
        return view('users.login');
    }

    public function postlogin(Request $request){
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/dashboard');
        }
        return redirect('/');
    }

    // public function logout(){
    //     Auth::logout();
    //     return redirect('/');
    // }

    public function register(){
        return view('users.register');
    }

    public function registersave(Request $request){
        // dd($request->all());
        User::create([
            'name' =>$request->name,
            'level' => 'siswa',
            'email' =>$request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);
        return redirect('login');
    }
}
