@extends('layout.app')

@section('head')
<title>Movies</title>
@endsection

@section('content')
    <h1 class="text">Liste des films</h1>
    @foreach ($movies as $movie)
<!-- une boucle foreach -->

            <div class="card_movie">
                <img src="{{ $movie['img'] }}" alt="{{ $movie['name'] }}'s poster">
                <a href="/movies/{{ $movie['id'] }}" class="text">{{ $movie['name'] }}</a>
            </div>

    @endforeach
@endsection