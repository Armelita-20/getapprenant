<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NOUVEL ENREGISTREMENT</title>
    <link rel="stylesheet" href="{{asset('bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="google_font">


</head>
<body >
<header class="header" style="background-image:linear-gradient(to right,black, brown);">
<a href="/" class="logo" >
    <img src="ima/logo.png"alt="logo"  width="90px" height="80px">
   </a>

<!--    hidden checkbox is used as click reciever,
  so you can use the :checked selector on it. -->
 <input type="checkbox" class="menu-btn" id="menu-btn" />

<!-- label class used for tageting the checkbox -->
<label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>

<ul class="menu">
  <li>
  <a href="{{url('formapprenant')}}" class="hr">Nouvel enregistrement</a>
  </li>
  <li>
    <a href="{{url('listapprenant')}}" class="hr">Liste des apprenants</a>
  </li>
  <li>
  <a href="{{url('aide')}}" class="hr">Aide</a>
  </li>
  <li>
  <form class="form-inline" method="get" onkeyup="myFunction()" action="rechercher.php">
    <input class="form-control mr-sm-2 my-sm-3" id="search" type="search" placeholder="Recherche" aria-label="Search">
    <!-- <button class="btn btn-outline-info my-2 my-sm-3" type="submit">OK</button> -->
      </form>
  </li>
</ul>
</header>
<br><br>
@yield('content')

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>

</body>
</html>
