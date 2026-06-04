<?php

namespace App\Http\Controllers;

use App\Models\Movie; // <-- OBLIGATOIRE pour lier ta base de données
use Illuminate\Http\Request;

class MovieController extends Controller
{
   public function index(Request $request)
{
    $genres = Movie::pluck('genre')->unique()->filter()->sort();

    $query = Movie::query();

    if ($request->has('genre') && $request->genre != '') {
        $query->where('genre', $request->genre);
    }

    $movies = $query->get();

    return view('index', compact('movies', 'genres'));
}
    public function show(string $id) 
{
       $movie = Movie::find($id);
        return view('show', [
            'movie' => $movie
        ]);
    }

}