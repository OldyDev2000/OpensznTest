<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\TmdbService;


class ControllerApiTest extends Controller
{
    protected $tmdbService;

    // public function __construct(TmdbService $tmdbService)
    // {
    //     $this->tmdbService = $tmdbService;
    // }

    public function index(Request $request)
    {
        // $timeWindow = $request->query('timeWindow', 'day');
        // $movies = $this->tmdbService->getFilmsTendance($timeWindow);

        return view('films.index');
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
        // $response = Http::get("https://api.themoviedb.org/3/movie/{$id}", [
        //     'api_key' => $this->apiKey
        // ]);
    
        // $movie = $response->json();
        // $response = $this->tmdbService->getMovieDetails($id);
        // return view('movies.show', ['movie' => $response]);
        // return view('films.show', ['movie' => $movie]);
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
