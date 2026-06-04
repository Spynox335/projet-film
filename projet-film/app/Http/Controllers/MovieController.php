<?php

namespace App\Http\Controllers;

use App\Models\Movie; 
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

    return view('movies.index', compact('movies', 'genres'));
}
    public function show(string $id) 
{
       $movie = Movie::find($id);
        return view('movies.show', [
            'movie' => $movie
        ]);
    }
public function create() {
return view('movies.create');
}
public function store(Request $request) {
     $request->validate([
         'title' => 'required|min:2',
         'genre' => 'required',
         'image' => 'required|url',]);
     Movie::create($request->all());
     return redirect('/movies');
}
public function edit($id) {
    $movie = Movie::findOrFail($id);
    return view('movies.edit', ['movie' => $movie]);
}
public function update(Request $request, $id) {
    $movie = Movie::findOrFail($id);
    $request->validate([
    'title' => 'required|min:2',
    'genre' => 'required',
  'image' => 'required|url',
    ]);
    $movie->update($request->all());
    return redirect('/movie/' . $id);
}

}