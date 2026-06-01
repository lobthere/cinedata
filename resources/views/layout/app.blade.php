<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    @yield('head')
</head>
<body>
    <img src="{{ $movie['image'] ?? 'https://images.unsplash.com/photo-1536440136628-849c177e76a1?w=500' }}" alt="Affiche du film" class="banner-cinema">
    @yield('content')
</body>
</html>