@extends('layout.app')

@section('content')
    <h2>Formulaire de modification de l'auteur : {{ $author->name }}</h2>
    <form action="{{ route("author.update", $author->id) }}" method="POST">
        @method('PUT')
        @csrf
        <label for="name">Nom : </label>
        <input type="text" id="name" name="name" value="{{ $author->name }}">
        <button type="submit">Modifier l'auteur !</button>
    </form>
@endsection