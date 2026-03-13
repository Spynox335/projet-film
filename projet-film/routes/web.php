<?php

use Illuminate\Support\Facades\Route;

Route::get('/movies', function () {
    return view('movies');
});

