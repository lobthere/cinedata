<h1>Liste des films</h1>

<ul>
@foreach ($movies as $movie)
    <li>
        <p>
            {{ $movie['title'] }}
        </p>
    </li>

@endforeach

</ul>