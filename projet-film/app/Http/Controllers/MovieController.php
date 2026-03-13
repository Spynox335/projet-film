<?php

 namespace App\Http\Controllers;

use Illuminate\Http\Request;

 class MovieController extends Controller{
    public function getMovies()
    {
        return [
            ['id' => 1, 'title' => 'la guerre des mondes', 'description' => 'Description du premier film...'],
            ['id' => 2, 'title' => 'blue story', 'description' => 'Description du deuxième film...'],
            ['id' => 3, 'title' => 'Le cinquième élément', 'description' => 'Description du troisième film...'],
        ];
    }

    public function index()
    {
        return view('index', [
            'movies' => $this->getMovies()
        ]);
    }

    public function show($id)
    {
        $movies = $this->getMovies();
        $movie = collect($movies)->firstWhere('id', $id);

        return view('show', [
            'movie' => $movie
        ]);
    }
}