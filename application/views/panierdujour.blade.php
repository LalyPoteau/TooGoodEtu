@extends('templates.appV1')


@section('content')
<header>
<h1> A sauver aujourd'hui </h1>
</header>

@foreach($panierdujour as $panier=>$info)
<a href="index.php?page=visupanier&index={{$info['id']}}">
<div class=panier>
    <span class="etiquette">{{$info['intitule']}} </span>
    <img src="{{URL_PUBLIC}}{{$info['img_url']}}">
    <h2> {{$info['nom']}} </h2>
    <span> à récupérer le {{$info['dateRetrait']}}
        : {{$info['heureDebut']}} - {{$info['heureFin']}} </span>
    <p> {{$info['prix']}} € </p>
</div>
</a>
@endforeach


@endsection('content')

