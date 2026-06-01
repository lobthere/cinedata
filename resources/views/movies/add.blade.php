@extends('layout.app')

@section('head')
<title>Adder</title>
@endsection

@section('content')
    <h1 class="text">Ajoute tes propres films</h1>
    <form action="{{ url('receiverMovie') }}" method="post">
        <label for="title">Titre</label>
        <input type="text" id="title" name="title">

        <label for="content">Description</label>
        <input type="text" name="content" id="content">

        <label for="img">Image</label>
        <input type="text" name="img" id="img">

        <input type="submit" name="submit" id="submit" value="Envoyer">

    </form>
@endsection