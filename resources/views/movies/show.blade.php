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
           <div class="movie-metadata">
              <span class="badge year">{{ $movie['year'] ?? 'N/A' }}</span>
              <span class="badge duration">{{ $movie['duration'] ?? 'N/A' }}</span>
             <span class="badge genre">{{ $movie['genre'] ?? 'N/A' }}</span>
</div>

            <h3>{{ $movie['title'] }}</h3>
            <p>{{ $movie['content'] }}</p>
        </div>
    </div>

    <a href="/movies" class="text">Retour</a>
@endsection