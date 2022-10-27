<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;

class ControllerUser extends Controller
{
    function index(request $request){
        if (session()->has('user')) {
            return redirect('/actualites');
        }
        else if($request->hasCookie('remember')){
            $remember = Cookie::get('remember');
            $user = DB::table('user')->where('remember', $remember)->first();
            session()->put('user', $user->login);
            return redirect('/actualites');
        }
        else{
            return view(view: 'login');
        }
        
    }


    function login(){
        return view(view: 'login');
    }


    function register(){
        return view(view: 'register');
    }


    function logout(){
        session()->forget('user');
        Cookie::forget('remember');
        return view('login');
    }


    function loginT(request $request){ 
        $validated = $request->validate([
            'email' => ['required', 'exists:user'],
            'mdp' => ['required'],
        ],
        [
            'email.exists' => "cet email n'existe pas",
        ]);
        $rememberme = $request->has('rememberme') ? true : false; 
        $user = DB::table('user')->where('email', $validated['email'])->first();
        if($validated['email'] == $user->email && sha1($validated['mdp']) == $user->mdp){
            session()->put('user', $user);
            if($rememberme){
                $token = $request->input('_token');
                Cookie::queue('remember', $token, 120);
                DB::table('user')
                ->where('id', $user->id)
                ->update(['remember' => $token]);
            }
            return redirect('/actualites');
        }else {
            return back()->with('error','Mauvais mot de passe');
        }
    }


    function registerT(request $request){
        $validated = $request->validate([
            'email' => ['required', 'unique:user'],
            'mdp' => ['required', 'confirmed'],
            'login' => ['required', 'unique:user']
        ],
        [
            'email.unique' => "Vous êtes déjà inscrit avec cette adresse mail",
            'login.unique' => "Veuillez choisir un autre nom d'utilisateur",
            'mdp.confirmed' => "Veuillez écrire le même mot de passe pour le confirmer"
        ]);

        DB::table('user')
                ->insert(['email' => $validated['email'], 'mdp' => sha1($validated['mdp']), 'login' => $validated['login']]);
        return view(view: 'login');
    }
}
