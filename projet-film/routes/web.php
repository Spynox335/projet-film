<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MovieController;

Route::get('/Home', function () {
    return view('index');
});

Route::get('/movies', [MovieController::class, 'index']);

Route::get('/movie/{id}', [MovieController::class, 'show']);

Route::get('/movies', [MovieController::class, 'index'])->name('movies.index');

Route::get('/movie/{id}', [MovieController::class, 'show']);

Route::get('/movies/create', [MovieController::class, 'create']);
Route::post('/movies', [MovieController::class, 'store']);

Route::get('/movies/{id}/edit', [MovieController::class, 'edit']);
Route::put('/movies/{id}', [MovieController::class, 'update']);
