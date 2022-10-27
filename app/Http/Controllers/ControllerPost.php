<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControllerPost extends Controller
{
    function search(request $request){
        $v = '';
        $articles = [];
        if(isset($request->v)){
            $articles = DB::table('user')
            ->select('article.*', 'user.login')        
            ->join('article', 'user.id', '=', 'article.idAuteur')
            ->where('tags', 'like','%' . $request->v . '%' )
            ->get();
            $articles = collect($articles)->map(function($x){ return (array) $x; })->toArray(); 
            $v = $request->v;
        }
        return view('search', ['articles' => $articles], ['v' => $v]);
    }

    function publish(){
        return view(view: 'publish');
    }

    
    function publishT(request $request){
        $user = session('user');
        $validated = $request->validate([
            'titre' => ['required'],
            'img' => ['required', 'mimes:jpg,jpeg,png,gif'],
            'tags' => ['required']
        ],
        [
            'titre.required' => 'Veuillez donner un titre à votre post',
            'img.required' => 'Veuillez charger une image à votre post',
            'tags.required' => 'Veuillez mettre au moins un tag à votre post'
        ]);
        
        $path = $validated['img']->storeAs(
            'upload',
            $user->id . '_' . time() . "." . $validated['img']->getClientOriginalExtension(),
            'public'
        );
        
        DB::table('article')
        ->insert(['titre' => $validated['titre'], 'img_url' => '/' . $path, 'idAuteur' => $user->id, 'tags' => $validated['tags'] ]);
        
        return redirect('/actualites');
    }

    function articles(){
        $user = session('user');
        $articles = DB::table('article') 
        ->join('user', 'user.id', '=', 'article.idAuteur')
        ->where('idAuteur', $user->id)
        ->get();
        $articles = collect($articles)->map(function($x){ return (array) $x; })->toArray(); 
        return view('articles', ['articles' => $articles]);
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
