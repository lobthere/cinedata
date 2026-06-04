@extends('layout.app')

@section('head')
    <title>Movies</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
    <h1 class="text">Liste des films</h1>
    <ul>
    @foreach ($movies as $movie)
<!-- une boucle foreach -->
        <li>
            <a href="/movies/{{ $movie['id'] }}" class="text">
                <div class="card_movie">
                    <img src="{{ $movie['img'] }}" alt="{{ $movie['title'] }}'s poster" class="movie-poster">
                    <br>
                    <p>{{ $movie['title'] }}</p>
                </div>
            </a>
        </li>
    @endforeach
    </ul>
@endsection