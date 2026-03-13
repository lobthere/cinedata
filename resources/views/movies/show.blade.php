<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/show.css">
    <title>{{ $movie['title'] }}</title>
</head>
<body>
    <h1>{{ $movie['title'] }}</h1>
<!-- Correspond au titre du film -->

    <p>{{ $movie['content'] }}</p>
<!-- Correspond au contenus de l article -->

    <a href="/movies">Retour</a>
</body>
</html>



