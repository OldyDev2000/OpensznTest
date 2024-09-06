<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\TmdbService;
use Illuminate\Support\Facades\Http;
use App\Models\Movie;


class ControllerApiTest extends Controller
{
    protected $tmdbService;

    public function __construct(TmdbService $tmdbService)
    {
        $this->tmdbService = $tmdbService;
    }

    public function index()
    {
        $movies = Movie::paginate(10);
        return view('movies.index', ['movies'=> $movies]);
    }




    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $movie = Movie::find($id);
        return view('movies.show', ['movie' => $movie]);
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movie $movie)
    {
        return view('movies.edit', ['movie'=> $movie]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Movie $movie)
    {
        $validate = $request->validate([
            'title' => 'required|string|max:100',
            'overview' => 'required|string',
            'release_year' => 'required|integer',
            'vote_average' => 'required|numeric|min:0|max:10', 
            'poster_path' => 'required|string', 
        ]);
        
        $movie->update($validate);
        return redirect()->route('movies.index')->with('success', 'Modification effectuée avec succès !!');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie)
    {
        $movie->delete();
        return redirect()->route('movies.index')->with('danger', 'Ce film a été supprimé avec succès!');
    }

    
    public function search(Request $request)
    {
        
        $validated = $request->validate([
            'titre' => 'required|string|max:50',
        ]);
    
        // Récupération du titre et recherche dans la base de données
        $titre = $validated['titre'];
        $movies = Movie::where('title', 'like', "%$titre%")->get();
    
        // Retourner la vue avec les résultats de la recherche
        return view('movies.index', ['movies' => $movies]);
    }
    
    
}
