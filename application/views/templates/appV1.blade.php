<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TooGood</title>

    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link href="{{URL_CSS}}normalize.css" rel="stylesheet">
    <link href="{{URL_CSS}}public.css" rel="stylesheet">
    @stack('css')

    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">

</head>

<body>
  @isset($_SESSION['info'])
    <p id="info">{{$_SESSION['info']}}</p>@php unset($_SESSION['info']); @endphp
  @endisset


  @yield('content')

@isset($_SESSION["id"])

  @section('bottom_menu')
<footer>
<a href="{{URL_INDEX}}?page=panierdujour"> <i class='bx bx-compass'> </i> </br> <span> Découvrir </span></a>
<a href="{{URL_INDEX}}?page=parcourir"> <i class='bx bx-calendar' ></i> </br>  <span> Parcourir  </span></a>
<a href="{{URL_INDEX}}?page=filtrer"> <i class='bx bx-search' ></i> </br>  <span> Filtrer  </span></a>
<a href="{{URL_INDEX}}?action=logout"> <i class='bx bx-log-out-circle' ></i> </br>  <span> Se déconnecter  </span></a>
</footer>
@show

@endisset


</body>
</html>
