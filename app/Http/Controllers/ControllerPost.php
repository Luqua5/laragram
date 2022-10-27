<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControllerPost extends Controller
{
    function search(){
        return view(view: 'search');
    }

    function publish(){
        return view(view: 'publish');
    }

    function actualites(){
        $user = session('user');
        
        $articles = DB::table('user')
        ->select('article.*', 'user.login')        
        ->join('article', 'user.id', '=', 'article.idAuteur')
        ->whereIn('idAuteur', function($query) use ($user){
            $query->select('idAmi')->from('friend')->where('idAbonne', $user->id)->get();})
        ->get();
        $articles = collect($articles)->map(function($x){ return (array) $x; })->toArray(); //Ce truc transforme mon objet avec des objets en tableau associatifs de tableau associatifs

        return view('actualites', ['articles' => $articles]);
    }
}
