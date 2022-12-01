@extends('layout.app')

@section('content')

    <li>
        <a href="{{ route('author.create') }}" title="ajouter un auteur">Ajouter un auteur</a>
    </li>
    <h2>Liste des auteurs</h2>
    <table border="1">
        <thead>
            <tr>
                <th>id</th>
                <th>nom</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($authors as $author)
                <tr>
                    <td>{{ $author->id }}</td>
                    <td>{{ $author->name }}</td>
                    <td>
                        <a href="{{ route("author.show", $author->id) }}">Voir</a>
                        <a href="{{ route("author.edit", $author->id) }}">Modifier</a>
                        <form action="{{ route("author.destroy") }}" method="POST">
                            @method('delete')
                            @csrf
                            <input type="hidden" name="author_id" value="{{ $author->id }}">
                            <button type="submit">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection