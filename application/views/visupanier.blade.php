@extends('templates.appV1')
@section('content')
@foreach($panier as $info)
<div class="banner_panier">
<a href="index.php?page=panierdujour" class="retour"> <i class='bx bx-chevron-left' ></i> </a>
    <img src="{{URL_PUBLIC}}{{$info['img_url']}}">
    <span class="etiquette_restant">plus que {{$info['nbPanier']}} </span>
    <h2> {{$info['nom']}} </h2>
</div>
<div class="main_info_panier">
    <h3> {{$info['prix']}} € </h3>
    <p> <i class='bx bx-time-five' ></i> à récupérer : {{$info['heureDebut']}} - {{$info['heureFin']}} ({{$info['dateRetrait']}}) </p>
    <p> <i class='bx bx-location-plus' ></i> {{$info['adresse']}} </br> {{$info['ville']}} </p>
    <p class="inclusion_bouton"><strong>Ce que vous pouvez savoir </strong> </br> {{$info['description']}} </br>
</p>
<p class="bouton">{{$info['intitule']}} </p>

    
</div>
@endsection

@section('bottom_menu')

<a href="index.php?page=resaPanier&index={{$info['id']}}" class="bouton_panier"> Réserver </a>
@endforeach

@endsection