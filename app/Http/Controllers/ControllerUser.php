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

    function loginT(request $request){ 
        $validated = $request->validate([
            'mail' => ['required', 'unique:user'],
            'pwd' => ['required']
        ]);

        var_dump($validated);

        /* if (null == ($request->input("mail")) || null == ($request->input("pwd"))) {
            return view(view: 'login');
        }
        else {
            $user = DB::select("select * from user where email=? and mdp=sha1(?)", [$request->input("email"), $request->input("pwd")]);
            if($user === false){
                return view(view: 'login');
            }
            else{
                $request->session()->put('id', $user['id']);
                $request->session()->put('login', $user['login']);
                if(null !== ($request->input('rememberme'))){
                    
                }
            }
        }  */
        return;
    }
}
