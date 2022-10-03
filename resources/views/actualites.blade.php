@extends('layouts.app')

@section('css')
  <link href="/public/css/actualites.css" rel="stylesheet">
@endsection


@section('content')
  <section class="actu">
  @forelse($articles as $a)
      <a href="index.php?action=articles&id={{$a['idAuteur']}}">
        <img src="{{$a['img_url']}}" />
        <span>{{$a['login']}}</span>
      </a>
  @empty
    <span>Aucun article</span>
  @endforelse
</section>
@endsection
