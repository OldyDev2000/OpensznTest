@extends('layoutsFilms.home')
@section('content')
    <h2>Rechercher un film par son titre :  
        <form action="{{route('movies.index')}}" method="get">
            @csrf
        <input type="text" name="titre">
        <button class="btn border-t-neutral-50 btn-primary">RECHERCHER</button>
    </form>
    </h2>
    
    <table class="table table-light table-striped">
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
            <td><a href="{{ route('movies.show', $movie->id) }}"><button class="btn btn-primary">Details</button></a></td>
            <td><a href="{{ route('movies.edit', $movie->id) }}"><button class="btn btn-warning">Modifier</button></a></td>
            <td>
                <form action="{{ route('movies.destroy', $movie->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer?')">Supprimer</button>
                </form>
            </td>
        </tr>
    @endforeach
  
    </table>
 
@endsection