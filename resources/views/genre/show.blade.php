@extends('layout.app')

@section('content')
    <h2>Affichage d'un genre {{ $genre->name }}</h2>
    <ul>
        <li>{{ $genre->id }}</li>
        <li>{{ $genre->name }}</li>
        <ul>
            @foreach($genre->books as $book)
                <li>{{$book->name}}</li>
            @endforeach
        </ul>
        <li>{{ $genre->created_at }}</li>
        <li>{{ $genre->updated_at }}</li>
    </ul>
@endsection