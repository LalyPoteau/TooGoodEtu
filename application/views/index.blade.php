@extends('templates.appV1')


@section('content')
  <div class="content accueil">
    <img src="{{URL_LOGO}}logo.png">
    <h1>Bon retour parmi nous !</h1>
    <p>Cliquez sur le bouton ci-dessous pour vous connecter
     et continuer à sauver de la nourriture à nos cotés.</p>
     <a class="button gb" href="{{URL_INDEX}}?page=login">Je me connecte</a>
     <a class="button gb" href="{{URL_INDEX}}?page=register">Créer un profil utilisateur</a>

     <a class="button tb" href="{{URL_INDEX}}?page=login">Login restaurant</a>
  </div>
@endsection('content')
