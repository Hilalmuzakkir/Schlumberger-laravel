<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    function login(){
        return view('login');
    }

    function view(){
        return view('home');
    }
}
