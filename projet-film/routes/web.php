<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MovieController;

Route::get('/Home', function () {
    return view('index');
});

Route::get('/index', [MovieController::class, 'index']);

Route::get('/views/{id}', [MovieController::class, 'show']);

Route::get('/index', [MovieController::class, 'index'])->name('movies.index');

Route::get('/movie/{id}', [MovieController::class, 'show'])->name('movies.show');