<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerUser extends Controller
{
    function login(){
        return view(view: 'login');
    }

    function register(){
        return view(view: 'register');
    }
}
