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
            <h3>{{ $movie['title'] }}</h3>
            <p>{{ $movie['content'] }}</p>
        </div>
    </div>

    <a href="/movies/{{ $movie->id }}/edit" class="button-special">Edit</a>

    <a href="/movies" class="button-special">Retour</a>
@endsection