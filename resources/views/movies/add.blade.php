@extends('layout.app')

@section('head')
<title>Adder</title>
@endsection

@section('content')
    <h1 class="text">Ajoute tes propres films</h1>
    <form action="{{ url('store') }}" method="post">
        
        @csrf

        <label for="title">Titre</label>
        <input type="text" id="title" name="title" value="{{ old('title') }}">

        <label for="content">Description</label>
        <input type="text" name="content" id="content" value="{{ old('content') }}">

        <label for="img">Image</label>
        <input type="file">

        <input type="submit" name="submit" id="submit" value="Envoyer">

    </form>
@endsection