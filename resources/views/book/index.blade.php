@extends('layout.app')


@section('content')

    <li>
        <a href="{{ route('book.create') }}" title="ajouter un livre">Ajouter un livre</a>
    </li>

    <h2>Liste des livres</h2>
    <table border="1">
        <thead>
            <tr>
                <th>id</th>
                <th>nom</th>
                <th>auteur</th>
                <th>genre</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
                <tr>
                    <td>{{ $book->id }}</td>
                    <td>{{ $book->name }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->genre}}</td>
                    <td>
                        <a href="{{ route("book.show", $book->id) }}">Voir</a>
                        <a href="{{ route("book.edit", $book->id) }}">Modifier</a>
                        <form action="{{ route("book.destroy") }}" method="POST">
                            @method('delete')
                            @csrf
                            <input type="hidden" name="book_id" value="{{ $book->id }}">
                            <button type="submit">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection