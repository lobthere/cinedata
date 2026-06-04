<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/show.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('head')
   
<header class="main-header" style="background-image: linear-gradient(rgba(36, 47, 64, 0.75), rgba(36, 47, 64, 0.85)), url('https://i.pinimg.com/1200x/5a/29/1d/5a291d13c8cdc4b71d6cbf171e09e6a6.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; padding: 20px 40px;">
    <div class="logo"></div>
    
    <nav class="navbar">
<a href="/movies" class="nav-logo">Cinédata</a>
<ul class="nav-links">
     <li><a href="/movies">Films</a></li>
     <li><a href="#">Cinéma</a></li>
     <li><a href="#">Ajout</a></li>
     <li><a href="#">Présentation</a></li>
     <li><a href="#">À propos</a></li>
     <li><a href="#">Connexion</a></li>
</ul>
</nav>
</header>

</head>
<body>
    
    @yield('content')
</body>
</html>