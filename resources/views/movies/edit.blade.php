@extends('layoutsFilms.home')
@section('content')
<style>
    b {
        color: red;
    }
</style>
<form action="{{ route('movies.update', $movie->id ) }}" method="post">
    @method('PUT')
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Titre Film</label>
        <input type="text" class="form-control" name="title" value="{{ old('title', $movie->title) }}">
    </div>
    @error('title') <b>{{ $message }}</b> @enderror

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Overview</label>
        <input type="text" class="form-control" name="overview" value="{{ old('overview', $movie->overview) }}">
    </div>
    @error('overview') <b>{{ $message }}</b> @enderror

    <div class="mb-3">
        <label class="form-check-label">Date sortie</label>
        <input type="text" class="form-control" name="release_year" value="{{ old('release_year', $movie->release_year) }}">
    </div>
    @error('release_year') <b>{{ $message }}</b> @enderror

    <div class="mb-3">
        <label class="form-check-label">Vote</label>
        <input type="number" class="form-control" name="vote_average" value="{{ old('vote_average', $movie->vote_average) }}">
    </div>
    @error('vote_average') <b>{{ $message }}</b> @enderror

    <div class="mb-3">
        <label class="form-check-label">Poster</label>
        <input type="text" class="form-control" name="poster_path" value="{{ old('poster_path', $movie->poster_path) }}">
    </div>
    @error('poster_path') <b>{{ $message }}</b> @enderror

    <button type="submit" class="btn btn-primary">Modifier</button>
</form>
@endsection
