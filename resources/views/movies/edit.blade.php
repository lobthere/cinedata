@extends('layout.app')

@section('head')
<title>{{ $movie['title'] }}</title>
<link rel="stylesheet" href="{{ asset('css/edit.css') }}">
@endsection

@section('content')
    @extends('layout.app')

@section('head')
<title>{{ $movie['title'] }}</title>
<link rel="stylesheet" href="{{ asset('css/show.css') }}">
@endsection

@section('content')
    <form action="{{ url('store') }}" method="post" enctype="multipart/form-data" >
        
        @csrf
        @method('PUT')

        <label for="title">Titre</label>
        <input type="text" id="title" name="title" value="{{ old('title'), $movie->title }}">

        <label for="content">Description</label>
        <input type="text" name="content" id="content" value="{{ old('content'), $movie->content }}">

        <p>image</p>
        <input name="img" id="img" type="file">

        <input type="submit" name="submit" id="submit" value="Sauvegarder">

    </form>
@endsection