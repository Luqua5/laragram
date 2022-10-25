@extends('layouts.appV1')

@section('content')
<div class="register">
  @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif
  <form action='{{url("registerT")}}' method='POST'>
    @csrf
    <input type='email' name='email' placeholder='e-mail'>
    <input type='text' name='login' placeholder='login'>
    <input type='password' name='mdp' placeholder='Mot de passe'>
    <input type='password' name='mdp_confirmation' placeholder='Confirmation du mot de passe'>

    <input type='submit' name='inscription' value="S'enregistrer">
  </form>
</div>

<div class="login">
  <span>Déjà inscrit ? <a href='{{url("login")}}'>Connectez-vous</a></span>
</div>
@endsection('content')
