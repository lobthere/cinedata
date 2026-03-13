<h1>Liste des films</h1>

<ul>
@foreach ($movies as $movie)
    <li>
        <a href="/movies/{{ $movie['id'] }}">{{ $movie['title'] }}</a>
    </li>

@endforeach

</ul>