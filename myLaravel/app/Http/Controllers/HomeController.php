<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    function_construct(){
        $user = session()->get('user');
        print_r($user);
        if(!isset($user)){
            return redirect('/login')
        }
    }
    //
    function index()
    {
        return view('dashboard');
    }
    function error404()
    {
        return view('errors.404');
    }
    function error500()
    {
        return view('errors.500');
    }
}