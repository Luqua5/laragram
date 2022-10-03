<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerPost extends Controller
{
    function search(){
        return view(view: 'search');
    }

    function publish(){
        return view(view: 'publish');
    }

    function actualites(){
        return view(view: 'actualites');
    }
}
