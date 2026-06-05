{{-- Héritage du layout principal situé dans resources/views/layout/app.blade.php --}}
@extends('layout.app')

{{-- Section contenant les éléments spécifiques à insérer dans le <head> de la page --}}
@section('head')
    <title>{{ $movie['title'] }}</title>
    {{-- Inclusion de la feuille de style spécifique à cette page --}}
    <link rel="stylesheet" href="{{ asset('css/show.css') }}">
@endsection

{{-- Section pour personnaliser la barre de navigation (ajout du bouton de modification) --}}
@section('navbar')
    {{-- Lien vers la page d'édition du film --}}
    <a href="/movies/{{ $movie->id }}/edit" class="button-special">Edit</a>
@endsection

{{-- Section principale contenant le contenu de la page --}}
@section('content')
    <h1 class="page-title">{{ $movie['title'] }}</h1>

    {{-- Bloc principal : Affichage des détails du film --}}
    <div class="card movie">
        {{-- Conteneur de l'affiche du film --}}
        <div class="card movies-image-container">
            <img src="{{ $movie['img'] }}" alt="Affiche du film">
        </div>
        
        {{-- Conteneur des informations textuelles du film --}}
        <div class="card movies-info">
           <div class="movie-metadata"></div> {{-- Zone prévue pour les métadonnées (durée, année, etc.) --}}

           <h3>{{ $movie['title'] }}</h3>
           <p>{{ $movie['content'] }}</p>
        </div>

        {{-- Actions possibles sur le film (Retour et Suppression) --}}
        <div class="container-actions">
            {{-- Bouton pour revenir à la liste des films --}}
            <a href="/movies" class="button-special">Retour</a>

            {{-- Formulaire de suppression du film --}}
            <form method="POST" action="/movies/{{ $movie->id }}" class="form-supprimer">
                @csrf {{-- Protection Laravel contre les attaques CSRF --}}
                @method('DELETE') {{-- Simule une requête HTTP DELETE pour le contrôleur --}}
                <button type="submit" class="btn-supprimer">Supprimer</button>
            </form>
        </div>
    </div>
    
    {{-- Bloc Formulaire : Ajouter un nouveau commentaire --}}
    <div class="createComments">
        <form action="/movies/{{  $movie->id  }}/comment" method="post">
            @csrf {{-- Protection Laravel contre les attaques CSRF --}}

            {{-- Champ pour le nom d'utilisateur --}}
            <label for="title">Username</label>
            {{-- Le helper old() permet de conserver la valeur saisie en cas d'erreur de validation --}}
            <input type="text" id="title" name="username" value="{{ old('username') }}">

            {{-- Champ pour le texte du commentaire --}}
            <label for="content">Commentaire</label>
            <input type="text" name="comment" value="{{ old('comment') }}">

            <input type="submit" name="submit" id="submit" value="Envoyer">
        </form>
    </div>

    {{-- Bloc Liste : Affichage des commentaires existants --}}
    <div class="comments">
        <ul>
        {{-- Boucle pour afficher chaque commentaire associé au film --}}
        @foreach ($comments as $comment)
            <li>
                <h5>{{ $comment['username'] }}</h5>
                <p>{{ $comment['comment'] }}</p>
            </li>
        @endforeach
        </ul>
    </div>
@endsection