<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function signin(){
    $data['header_title'] = 'SongBD | Signin';
    return view('signin',$data);    
   }  
   public function login(){
    $data['header_title'] = 'SongBD | Login';
    return view('login',$data);    
   }  
   public function register(Request $req){
    $req->validate([
        'email'=>'required|email',
        'password'=>'required|confirmed|alpha_num|min:8',
    ]);

    $user = User::create([
        'email'=>$req->email,
        'password'=>$req->password,
    ]);
    if($user){
        return redirect()->route('login');
    }}
    public function loging(Request $req){
        $credentials = $req->validate([
            'email'=>'required|email',
            'password'=>'required',
        ]);
        if(Auth::attempt($credentials)){
            return redirect()->route('song');
        }
        else{
            return redirect()->route('login')->with('status',"Login credentials does'nt match our record");
        }
    } 
    public function logout(){
        Auth::logout();
        return redirect()->route('song');
    }
}
