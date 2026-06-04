@extends('layout.app')

@section('head')
    <title>{{ $movie['title'] }}</title>
    <link rel="stylesheet" href="{{ asset('css/show.css') }}">
@endsection

@section('navbar')
    <a href="/movies/{{ $movie->id }}/edit" class="button-special">Edit</a>
@endsection

@section('content')
    <h1 class="page-title">{{ $movie['title'] }}</h1>

    <div class="card movie">
        <div class="card movies-image-container">
            <img src="{{ $movie['img'] }}" alt="Affiche du film">
        </div>
        
        <div class="card movies-info">
           <div class="movie-metadata"></div>

            <h3>{{ $movie['title'] }}</h3>
            <p>{{ $movie['content'] }}</p>
        </div>
   <div class="container-actions">
        <a href="/movies" class="button-special">Retour</a>

        <form method="POST" action="/movies/{{ $movie->id }}" class="form-supprimer">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn-supprimer">Supprimer</button>
        </form>
    </div>
    </form>
    
    <div class="createComments">
        <form action="/movies/{{  $movie->id  }}/comment" method="post">
            
            @csrf

            <label for="title">Username</label>
            <input type="text" id="title" name="username" value="{{ old('username') }}">

            <label for="content">Commentaire</label>
            <input type="text" name="comment" value="{{ old('comment') }}">

            <input type="submit" name="submit" id="submit" value="Envoyer">

        </form>
    </div>

    <div class="comments">
        <ul>
        @foreach ($comments as $comment)
        <!-- une boucle foreach -->
            <li>
                <h5>{{ $comment['username'] }}</h5>
                <p>{{ $comment['comment'] }}</p>
            </li>
        @endforeach
        </ul>
    </div>
@endsection
