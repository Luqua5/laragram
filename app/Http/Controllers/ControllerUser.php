<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
            'email' => ['required', 'exists:user'],
            'mdp' => ['required'],
        ],
        [
            'email.exists' => "cet email n'existe pas",
        ],
        );
        $rememberme = $request->has('rememberme') ? true : false; 
        $user = DB::table('user')->where('email', $validated['email'])->first();
        if($validated['email'] == $user->email && sha1($validated['mdp']) == $user->mdp){
            $request->session()->put('user', $validated['email']);
            if($rememberme){
                $token = $request->input('_token');
                $token = $request->cookie('remember');
                DB::table('user')
                ->where('id', $user->id)
                ->update(['remember' => $token]);
            }
            return view(view: 'actualites');
        }else {
            return back()->with('error','Mauvais mot de passe');

            
        }
    }
}
