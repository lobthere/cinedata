@extends('layout.app')

@section('head')
<title>{{ $movie['title'] }}</title>
@endsection

@section('content')
    <h1 class="text">{{ $movie['title'] }}</h1>
        <!-- Correspond au titre du film -->
    
    <p class="text">{{ $movie['content'] }}</p>
        <!-- Correspond au contenus de l article -->
    
    <a href="/movies" class="text" class="text">Retour</a>
@endsection