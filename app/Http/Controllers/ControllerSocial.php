<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerSocial extends Controller
{
    function subscription(){
        return view(view: 'subscription');
    }
}
