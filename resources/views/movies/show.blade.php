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

    <a href="/movies" class="button special">Retour</a>
    <span class="fleche">&larr;</span> 
</a>
@endsection