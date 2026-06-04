@extends('layout.app')

@section('head')
<title>Adder</title>
<link rel="stylesheet" href="{{ asset('css/add.css') }}">
@endsection

@section('content')
    <h1 class="text">Ajoute tes propres films</h1>
    <form action="{{ url('store') }}" method="post" enctype="multipart/form-data" >
        
        @csrf

        <label for="title">Titre</label>
        <input type="text" id="title" name="title" value="{{ old('title') }}">

        <label for="content">Description</label>
        <input type="text" name="content" id="content" value="{{ old('content') }}">

        <input name="img" id="img" type="file">

        <input type="submit" name="submit" id="submit" value="Envoyer">

    </form>
    <div class="container-retour">
    <a href="/movies" class="btn-retour">
        ← Retour
    </a>
</div>
@endsection