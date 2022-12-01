@extends('layout.app')

@section('content')
    <h2>Formulaire de modification du livre : {{ $book->name }}</h2>
    <form action="{{ route("book.update", $book->id) }}" method="POST">
        @method('PUT')
        @csrf
        <label for="name">Nom : </label>
        <input type="text" id="name" name="name" value="{{ $book->name }}">
        <select name="author">
            <option value="">--</option>
            @foreach($authors as $author)
                <option value ="{{ $author->id }}">{{ $author->name }}</option>
            @endforeach
        </select>
        <select name="genre">
            <option value="">--</option>
            @foreach($genres as $genre)
                <option value ="{{ $genre->id }}">{{ $genre->name }}</option>
            @endforeach
        </select>
        <button type="submit">Modifier le livre !</button>
    </form>
@endsection