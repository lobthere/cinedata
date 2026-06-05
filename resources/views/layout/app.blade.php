<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    {{-- Feuilles de style globales appliquées à toutes les pages du site --}}
    <link rel="stylesheet" href="{{ asset('css/show.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
    {{-- Emplacement pour injecter les balises spécifiques au head (titres, styles dédiés) --}}
    @yield('head')
</head> {{-- ATTENTION : J'ai déplacé la fermeture du </head> ici pour corriger la structure ! --}}

<body>
    {{-- En-tête principal du site (commun à toutes les pages) --}}
    <header class="main-header" style="background-image: linear-gradient(rgba(36, 47, 64, 0.75), rgba(36, 47, 64, 0.85)), url('https://i.pinimg.com/1200x/5a/29/1d/5a291d13c8cdc4b71d6cbf171e09e6a6.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; padding: 20px 40px;">
        <div class="logo"></div>
        
        {{-- Barre de navigation --}}
        <nav class="navbar">
            <a href="/movies" class="nav-logo">Cinédata</a>
            <ul class="nav-links">
                <li><a href="/movies">Films</a></li>
                <li><a href="/movies/add">Ajout</a></li>
                {{-- Emplacement pour injecter des boutons de navigation spécifiques (ex: le bouton Edit) --}}
                @yield('navbar')
            </ul>
        </nav>
    </header>

    {{-- Contenu principal de la page, injecté dynamiquement depuis les autres vues --}}
    @yield('content')
</body>
</html>