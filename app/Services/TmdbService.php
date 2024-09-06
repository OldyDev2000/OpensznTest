<?php
namespace App\Services;

use Illuminate\Support\Facades\Http;

class TmdbService
{
    protected $apiKey;

    public function __construct()
    {
        $this->apiKey = env('TMDB_API_KEY');
    }

    public function getFilmsTendance($timeWindow = 'day')
    {
        $response = Http::get("https://api.themoviedb.org/3/trending/movie/{$timeWindow}", [
            'api_key' => $this->apiKey
        ]);

        return $response->json();
    }
}

