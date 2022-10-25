@extends('layouts.appV1')


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
  @include('flash-message')

  <div class="login">
    <form action='{{url("/loginT")}}' method='POST'>
      @csrf
      <input type='email' name='email' placeholder='e-mail'>
      
      <input type='password' name='mdp' placeholder='Mot de passe'>

      <label class="rememberme" for="rememberme"><input type="checkbox" id="rememberme" name="rememberme" value="rememberme"> Se souvenir de moi</label>
      <input type='submit' name='connecter' value='Connexion'>
    </form>
  </div>

  <div class="register">
    <span>Vous n'avez pas de compte ? <a href='{{url("register")}}'>Inscrivez-vous</a></span>
  </div>
@endsection('content')
