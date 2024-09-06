<!DOCTYPE html>
<html>
<head>
    <title>{{ $movie['title'] }}</title>
</head>
<body>
    <h1>Informations sur le film : {{ $movie->title }}</h1>
    <p> <b>Owerview :</b> {{ $movie->overview}}</p>
    <p> <b>Sortie :</b> {{ $movie->release_date }}</p>
    <p> <b>Vote : </b> {{ $movie->vote_average}}</p>
    <p><b>Poster : </b>{{ $movie->poster_path}}</p>
    <a href="{{ route('films.index') }}">Retour</a>
</body>
</html>
