<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;
use App\Models\Movie;

class MoviesTableSeeder extends Seeder
{
    public function run()
    {
        $apiKey = env('TMDB_API_KEY');
        $response = Http::get("https://api.themoviedb.org/3/trending/movie/day?api_key={$apiKey}");
        $movies = $response->json('results');

        foreach ($movies as $movie) {
            Movie::updateOrCreate(
                ['id' => $movie['id']],
                [
                    'title' => $movie['title'],
                    'overview' => $movie['overview'],
                    'poster_path' => $movie['poster_path'],
                    'vote_average' => $movie['vote_average'],
                    'release_year' => date('Y', strtotime($movie['release_date'])),
                ]
            );
        }
    }
}
