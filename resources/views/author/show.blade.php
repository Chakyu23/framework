@extends('layout.app')

@section('content')
    <h2>Affichage de l'auteur {{ $author->name }}</h2>
    <ul>
        <li>{{ $author->id }}</li>
        <li>{{ $author->name }}</li>
        <ul>
            @foreach($author->books as $book)
                <li>{{$book->name}}</li>
            @endforeach
        </ul>
        <li>{{ $author->created_at }}</li>
        <li>{{ $author->updated_at }}</li>
    </ul>
@endsection