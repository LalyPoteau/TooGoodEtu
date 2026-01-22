@extends('templates.appV1')
@section('content')
@foreach($panier as $info)



<a href="index.php?page=panierdujour" class="retour"> <i class='bx bx-chevron-left' ></i> </a>
<div class='top_info'>
    <h2> {{$info['nom']}} </h2>
<p> <i class='bx bx-time-five' ></i> <strong> ({{$info['dateRetrait']}}) </strong> {{$info['heureDebut']}} - {{$info['heureFin']}}</p>
</div>
    <h3 class="price"> Total               {{$info['prix']}} € </h3>
<div class="centrer">
<p> En réservant vosu accepter les condition d'utilisation générale d'utilisation de TooGood To Lens </p>
@endsection

@section('bottom_menu')

<a href="index.php?page=resaPanier&index={{$info['id']}}" class="bouton"> Réserver </a>

<p> Attention afin que ces paniers puisse profiter à un maximum de personnes, la réservartion est limité a un panier par personne </br> Merci de votre compréhension </p>
@endforeach
</div>
@endsection