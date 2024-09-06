@extends('layoutsFilms.home')
@section('content')
    <title>{{ $movie['title'] }}</title>

    <h1>Informations sur le film : {{ $movie->title }}</h1>
    <p> <b>Owerview :</b> {{ $movie->overview}}</p>
    <p> <b>Sortie :</b> {{ $movie->release_date }}</p>
    <p> <b>Vote : </b> {{ $movie->vote_average}}</p>
    <p><b>Poster : </b>{{ $movie->poster_path}}</p>
    <a href="{{ route('movies.index') }}">Retour</a>

@endsection
