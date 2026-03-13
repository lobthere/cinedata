@extends('layout.app')

@section('head')
<title>Movies</title>
@endsection

@section('content')
    <h1 class="text">Liste des films</h1>

    <ul class="text">
    @foreach ($movies as $movie)
<!-- une boucle foreach -->
        <li>
            <a href="/movies/{{ $movie['id'] }}" class="text">{{ $movie['title'] }}</a>
        </li>

    @endforeach

    </ul>
@endsection