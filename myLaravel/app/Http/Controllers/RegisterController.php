<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class RegisterController extends Controller
{
    //
    function index()
    {
        return view('register');
    }

    function create (Request $req){
        User::create([
            'name'=> $req->name,
            'email'=> $req->email,
            'password'=> $req->password
        ]);
        print_r($req -> input());
        }
}