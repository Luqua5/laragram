@extends('layouts.app')

@section('css')
  <link href="/css/articles.css" rel="stylesheet">
@endsection


@section('content')
  <h1>{{$articles[0]['login']}}</h1>
  @forelse($articles as $a)
    <article class="post">
      <div>
        <span class="auteur">{{$a['login']}}</span>
      </div>
      <a href="{{route('articles', ['id' => $a['id']])}}"><img src="/storage{{$a['img_url']}}" /></a>
      <h3>{{$a['titre']}}</h3>
      <div class="desc">
        <span class="tags">{{$a['tags']}}</span>
        <a href=""><i class='bx bx-message-rounded-dots'></i></a>
        <a href=""><i class='bx bx-heart'></i></a>
      </div>
    </article>
  @empty
    <span>Aucun article</span>
  @endforelse
@endsection
