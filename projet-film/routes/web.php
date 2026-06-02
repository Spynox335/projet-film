<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MovieController;

Route::get('/home', function () {
    return view('index');
});

Route::get('/index', [MovieController::class, 'index']);

Route::get('/views/{id}', [MovieController::class, 'show']);

