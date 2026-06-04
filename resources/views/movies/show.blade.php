@extends('layout.app')

@section('head')
    <title>{{ $movie['title'] }}</title>
    <link rel="stylesheet" href="{{ asset('css/show.css') }}">
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
    </div>
    <a href="/movies" class="button-special">Retour</a>
    
    <a href="/movies/{{ $movie->id }}/edit" class="button-special">Edit</a>

    <form method="POST" action="/movies/{{  $movie->id  }}">
        @csrf
        @method('DELETE')
        <button type="submit">Supprimer</button>
    </form>
    
    <div class="createComments">
        <form action=""></form>
    </div>

    <div class="comments">
        <ul>
        @foreach ($comments as $comment)
        <!-- une boucle foreach -->
            @if ($comment->foreignId == $movie->id)
                <li>
                    <h5>{{ $comment['username'] }}</h5>
                    <p>{{ $comment['comment'] }}</p>
                        <div class="card_movie">
                            <img src="{{ $movie['img'] }}" alt="{{ $movie['title'] }}'s poster" class="movie-poster">
                            <br>
                            <p>{{ $movie['title'] }}</p>
                        </div>
                    </a>
                </li>
            @endif
        @endforeach
        </ul>
    </div>
@endsection
