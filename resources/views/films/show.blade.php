<!DOCTYPE html>
<html>
<head>
    <title>{{ $movie['title'] }}</title>
</head>
<body>
    <h1>{{ $movie['title'] }}</h1>
    <p>{{ $movie['overview'] }}</p>
    <p>Sortie : {{ $movie['release_date'] }}</p>
    <p>Note : {{ $movie['vote_average'] }}</p>
    <img src="https://image.tmdb.org/t/p/w500{{ $movie['poster_path'] }}" alt="{{ $movie['title'] }}">
    <a href="{{ route('films.index') }}">Retour</a>
</body>
</html>
