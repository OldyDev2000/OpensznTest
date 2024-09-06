<?php

use App\Http\Controllers\ControllerApiTest;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('movies', ControllerApiTest::class);
Route::get('search', [ControllerApiTest::class, 'search'])->name('movies.search');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
