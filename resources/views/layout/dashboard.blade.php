<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bibliotheque</title>
</head>
<body style="padding-left: 200px;">
    <h1>Bibliotheque</h1>
    <ul>
        <li>
            <a href="{{ route('book.index') }}" title="Liste des livres">Liste des livres</a>
        </li>
        <li>
            <a href="{{ route('author.index') }}" title="Liste des auteurs">Liste des auteurs</a>
        </li>
        <li>
            <a href="{{ route('genre.index') }}" title="Liste des genres">Liste des genres</a>
        </li>
    </ul>
</body>
</html>