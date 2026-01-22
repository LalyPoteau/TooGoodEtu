@extends('templates.appV1')

@push('css')
  <link href="/public/css/login.css" rel="stylesheet">
@endpush

@section('content')
<div class="content connexion">
  <h1 class="title">
    <a href="{{URL_INDEX}}"><i class='bx bx-chevron-left'></i></a>
    <span>S'enregistrer</span>
  </h1>
  <form class="login" action='{{URL_INDEX}}?action=register' method='POST'>
    <label>Votre e-mail :</label>
    <input type='mail' name='email' placeholder='e-mail' required>
    <label>Votre nom :</label>
    <input type='text' name='login' placeholder='login' required>
    <label>Votre mot de passe :</label>
    <input type='password' name='mdp' placeholder='Mot de passe' required>
    <input type='password' name='mdp1' placeholder='Confirmation du mot de passe' required>

    <input class="button gb" type='submit' name='inscription' value="S'enregistrer">
  </form>


  <div class="register">
      <span>Déjà inscrit ? <a href='{{URL_INDEX}}?page=login'>Connectez-vous</a></span>
  </div>

</div>







<div class="register">

</div>

<div class="login">

</div>
@endsection('content')
