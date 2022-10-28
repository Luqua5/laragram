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
        $friendUsers = DB::table('friend') -> join('user', 'user.id', '=', 'friend.idAmi') -> where('idAbonne', $user -> id) -> get();
        if(isset($request->v)){
            $v = $request->v;
            $searchUsers = DB::table('user')
            -> select('user.login', 'user.id', 'friend.idAbonne')
            -> leftjoin('friend', 'user.id', '=', 'friend.idAbonne') 
            -> where('user.login', 'like','%' . $v . '%') 
            -> where('user.id', '<>', $user->id)
            -> distinct()
            -> get();
        }
        return view('subscription', compact('v', 'friendUsers', 'searchUsers'));
    }

    function add($id){
        $user = session('user');
        DB::table('friend') -> insert([
            'idAbonne' => $user->id,
            'idAmi' => $id
        ]);
        return redirect('/subscription');
    }

    function delete($id){
        $user = session('user');
        DB::table('friend')->where('idAbonne', $user->id) ->where('idAmi', $id )->delete();
        return redirect('/subscription');
    }
}
