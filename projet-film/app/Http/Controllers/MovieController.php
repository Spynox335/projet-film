<?php

namespace App\Http\Controllers;

use App\Models\Movie; // <-- OBLIGATOIRE pour lier ta base de données
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all(); 

        return view('index', [
            'movies' => $movies
        ]);
    }
    public function show(string $id) 
    {

        $movie = Movie::findOrFail($id); 

        return view('show', [
            'movie' => $movie
        ]);
    }
}