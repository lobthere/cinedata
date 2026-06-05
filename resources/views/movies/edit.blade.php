{{-- Héritage du layout principal situé dans resources/views/layout/app.blade.php --}}
@extends('layout.app')

{{-- Section contenant les éléments spécifiques à insérer dans le <head> de la page --}}
@section('head')
    <title>{{ $movie['title'] }}</title>
    {{-- Inclusion de la feuille de style spécifique au formulaire d'édition --}}
    <link rel="stylesheet" href="{{ asset('css/edit.css') }}">
@endsection

{{-- Section principale contenant le contenu de la page --}}
@section('content')
    {{-- 
        Formulaire de modification :
        - action : pointe vers l'URL de mise à jour du film spécifique
        - enctype : CRUCIAL ici, permet l'envoi de fichiers (comme l'affiche du film) via le formulaire
    --}}
    <form action="/movies/{{  $movie->id  }}" method="post" enctype="multipart/form-data" >
        
        @csrf {{-- Protection Laravel contre les attaques CSRF --}}
        @method('PUT') {{-- Simule une requête HTTP PUT (mise à jour) requise par Laravel pour l'update --}}

        {{-- Champ de modification du titre --}}
        <label for="title">Titre</label>
        <input type="text" id="title" name="title" value="{{ $movie->title }}">

        {{-- Champ de modification de la description (content) --}}
        <label for="content">Description</label>
        <input type="text" name="content" id="content" value="{{ $movie->content }}">

        {{-- Champ d'upload pour la nouvelle image du film --}}
        <p>image</p>
        <input name="img" id="img" type="file">

        {{-- Bouton de soumission du formulaire --}}
        <input type="submit" name="submit" id="submit" value="Sauvegarder">

    </form>

    {{-- Zone de retour / Annulation --}}
    <div style="text-align: center; margin-top: 20px;">
        {{-- Lien pour revenir à la vue "show" du film sans enregistrer les modifications --}}
        <a href="/movies/{{ $movie->id }}" class="text" style="color: #E2C391; text-decoration: none; font-family: sans-serif; font-weight: bold;">← Annuler et retour</a>
    </div>
@endsection