{{-- Héritage du layout principal situé dans resources/views/layout/app.blade.php --}}
@extends('layout.app')

{{-- Section contenant les éléments spécifiques à insérer dans le <head> de la page --}}
@section('head')
    <title>Adder</title>
    {{-- Inclusion de la feuille de style spécifique au formulaire d'ajout --}}
    <link rel="stylesheet" href="{{ asset('css/add.css') }}">
@endsection

{{-- Section principale contenant le contenu de la page --}}
@section('content')
    <h1 class="text">Ajoute tes propres films</h1>
    
    {{-- 
        Formulaire de création :
        - action : utilise le helper url() pour cibler la route 'store'
        - method : "post" pour la création de ressource
        - enctype : requis pour permettre l'envoi de fichiers (l'affiche du film)
    --}}
    <form action="{{ url('store') }}" method="post" enctype="multipart/form-data" >
        
        @csrf {{-- Protection Laravel obligatoire contre les attaques CSRF --}}

        {{-- Champ pour le titre du film --}}
        <label for="title">Titre</label>
        {{-- old('title') permet de réafficher ce que l'utilisateur avait écrit si la validation échoue --}}
        <input type="text" id="title" name="title" value="{{ old('title') }}">

        {{-- Champ pour la description du film --}}
        <label for="content">Description</label>
        <input type="text" name="content" id="content" value="{{ old('content') }}">

        {{-- Champ d'upload pour téléverser l'image/affiche du film --}}
        <input name="img" id="img" type="file">

        {{-- Bouton de soumission pour envoyer les données au contrôleur --}}
        <input type="submit" name="submit" id="submit" value="Envoyer">

    </form>
    
    {{-- Conteneur pour le bouton de retour --}}
    <div class="container-retour">
        {{-- Lien pour abandonner la création et revenir à la liste des films --}}
        <a href="/movies" class="btn-retour">
            ← Retour
        </a>
    </div>
@endsection