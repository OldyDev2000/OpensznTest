@extends('layoutsFilms.home')
@section('content')

    <h1>Pages pour lister les films tendances</h1>

    <h2>Rechercher un film par son titre :  
        <form action="{route('films.index')}" method="get">
        <input type="text" name="titre">
        <button class="btn border-t-neutral-50 btn-primary">RECHERCHER</button>
    </form>
    </h2>
    <table class="table table-light">
        <tr>
            <th>Titre film</th>
            <th>Film Owerview</th>
            <th>Date film</th>
            <th colspan="3">Actions</th>
        </tr>
    @foreach ($movies as $movie)
        <tr>
            <td>{{ $movie->title }}</td>
            <td>{{ $movie->overview }}</td>
            <td>{{ $movie->release_year}}</td>
            <td><a href="{{ route('films.show', $movie->id) }}"><button>Details</button></a></td>
            <td>
                <a href="{{ route('films.destroy', $movie->id) }}">
                <button onclick="return confirm('Etes vous sure de vouloir supprimer')">Supprimer</button></a>
            </td>
        </tr>
    @endforeach
  
    </table>
 
@endsection