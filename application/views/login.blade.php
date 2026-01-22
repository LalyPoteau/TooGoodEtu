@extends('templates.appV1')

@push('css')
  <link href="/public/css/login.css" rel="stylesheet">
@endpush


@section('content')
<div class="content connexion">
  <h1 class="title">
    <a href="{{URL_INDEX}}"><i class='bx bx-chevron-left'></i></a>
    <span>Se connecter</span>
  </h1>
  <form class="login" action='{{URL_INDEX}}?action=login' method='POST'>
      <label>Votre e-mail :</label>
      <input type='mail' name='email' placeholder='e-mail'>
      <label>Mot de passe :</label>
      <input type='password' name='mdp' placeholder='Mot de passe'>
      <input class="button gb" type='submit' name='connecter' value='Connexion'>
  </form>

  <div class="register">
    <span>Vous n'avez pas de compte ? <a href='{{URL_INDEX}}?page=register'>Inscrivez-vous</a></span>
  </div>

</div>
@endsection('content')
