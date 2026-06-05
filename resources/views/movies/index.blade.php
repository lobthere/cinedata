{{-- Héritage du layout principal situé dans resources/views/layout/app.blade.php --}}
@extends('layout.app')

{{-- Section contenant les éléments spécifiques à insérer dans le <head> de la page --}}
@section('head')
    <title>Movies</title>
    {{-- Inclusion de la feuille de style spécifique à la page d'accueil/liste --}}
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

{{-- Section principale contenant le contenu de la page --}}
@section('content')
    <h1 class="text">Liste des films</h1>
    
    <ul>
    {{-- Boucle pour parcourir et afficher chaque film de la collection $movies --}}
    @foreach ($movies as $movie)
        <li>
            {{-- Lien dynamique vers la page de détails du film (vue "show") --}}
            <a href="/movies/{{ $movie['id'] }}" class="text">
                
                {{-- Conteneur visuel (carte) pour un film --}}
                <div class="card_movie">
                    {{-- Affiche/Image du film avec une alternative textuelle dynamique pour l'accessibilité --}}
                    <img src="{{ $movie['img'] }}" alt="{{ $movie['title'] }}'s poster" class="movie-poster">
                    <br>
                    {{-- Titre du film --}}
                    <p>{{ $movie['title'] }}</p>
                </div>

            </a>
        </li>
    @endforeach
    </ul>
@endsection