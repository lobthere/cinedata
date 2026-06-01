<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    @yield('head')
   
<header class="main-header">
    <div class="logo"></div>
    
    <nav class="navbar">
<a href="/movies" class="nav-logo">Cinédata</a>
<ul class="nav-links">
     <li><a href="/movies">Films</a></li>
     <li><a href="#">Cinéma</a></li>
     <li><a href="#">Acteurs</a></li>
     <li><a href="#">Prochaines sorties</a></li>
     <li><a href="#">À propos</a></li>
     <li><a href="#">Connexion</a></li>
</ul>
</nav>
</header>

</head>
<body>
    <img src="{{ $movie['image'] ?? 'https://images.unsplash.com/photo-1536440136628-849c177e76a1?w=500' }}" alt="Affiche du film" class="banner-cinema">
    @yield('content')
</body>
</html>