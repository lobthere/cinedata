<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/index.css">
    <title>Movies</title>
</head>
<body>
    <h1>Liste des films</h1>

    <ul>
    @foreach ($movies as $movie)
<!-- une boucle foreach -->
        <li>
            <a href="/movies/{{ $movie['id'] }}">{{ $movie['title'] }}</a>
        </li>

    @endforeach

    </ul>
</body>
</html>