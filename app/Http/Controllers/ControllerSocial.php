<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControllerSocial extends Controller
{
    function subscription(request $request){
        $user = session('user');
        $v = '';
        $searchUsers = [];
        $friendUsers = DB::table('friend') -> join('user', 'user.id', '=', 'friend.idAbonne') -> where('idAbonne', $user -> id) -> get();
        $friendUsers = collect($friendUsers)->map(function($x){ return (array) $x; })->toArray(); 
        if(isset($request->v)){
            $v = $request->v;
            $searchUsers = DB::table('friend') -> join('user', 'user.id', '=', 'friend.idAbonne') -> where('login', 'like','%' . $v . '%') -> get();
            $searchUsers = collect($searchUsers)->map(function($x){ return (array) $x; })->toArray(); 
        }
        return view('subscription', compact('v', 'friendUsers', 'searchUsers'));
    }
}
