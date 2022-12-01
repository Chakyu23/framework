@extends('layout.app')

@section('content')
    <h2>Formulaire de création d'un auteur</h2>
    <form action="{{ route("author.store") }}" method="POST">
        @csrf
        <label for="name">Nom : </label>
        <input type="text" id="name" name="name">
        <button type="submit">Créer un auteur !</button>
    </form>
@endsection