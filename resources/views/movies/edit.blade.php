@extends('layout.app')

@section('head')
<title>{{ $movie['title'] }}</title>
<link rel="stylesheet" href="{{ asset('css/edit.css') }}">
@endsection

@section('content')
    <form action="/movies/{{  $movie->id  }}" method="post" enctype="multipart/form-data" >
        
        @csrf
        @method('PUT')

        <label for="title">Titre</label>
        <input type="text" id="title" name="title" value="{{ $movie->title }}">

        <label for="content">Description</label>
        <input type="text" name="content" id="content" value="{{ $movie->content }}">

        <p>image</p>
        <input name="img" id="img" type="file">

        <input type="submit" name="submit" id="submit" value="Sauvegarder">

    </form>
    <div style="text-align: center; margin-top: 20px;">
    <a href="/movies/{{ $movie->id }}" class="text" style="color: #E2C391; text-decoration: none; font-family: sans-serif; font-weight: bold;">← Annuler et retour</a>
</div>
@endsection