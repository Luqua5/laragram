@extends('layouts.app')

@section('css')
  <link href="/css/publish.css" rel="stylesheet">
@endsection

@section('content')
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
  @endif
  <div class="publish">
  <h3>Une inspiration, une humeur ? </h3>
  <span class="callToAction">Partagez...</span>
  <form action='{{url("publishT")}}' method='POST' enctype="multipart/form-data">
    @csrf
    <input type='text' name='titre' placeholder='Titre de la publication'>
    <label class="file"><i class='bx bx-upload'></i>Charger une image<input type="file" id="file" name="img" accept="image/*"></label>
    <input type='text' pattern="^#[a-z0-9_]+(( )+#[a-z0-9_]+)*( )*$" name='tags' placeholder='Tags'>
    <input type='submit' name='publish' value='Publier'>
  </form>
  </div>
@endsection
