<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    function index()
    {
        return view('login');
    }

    function login(Request $req){
        //print_r($req->email);
        //print_r($req->password);
        $user = User::where('email',$req->email)->first();
        if($Hash::check($req->password, $user->passward)){
            session()->forget('error');
            session(['user'=>$user]);
            return redirect('/');
        }else{
            session(['error'=> 'ข้อมูลการเข้าสู่ระบบไม่ถูกต้อง']);
            return view('login', ['email'=>$req->email]);
            return redirect('/login');
        }
    
    }
}