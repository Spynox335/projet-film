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
            ['id'=> 4, 'title'=> 'Le dernier survivant', 'description' => 'Description du quatrième film...'],
            ['id'=> 5, 'title'=> '', 'description' => 'Description du cinquième film...'],
            ['id'=> 6, 'title'=> '', 'description' => 'Description du sixième film...'],
            ['id'=> 7, 'title'=> '', 'description' => 'Description du septième film...'],
            ['id'=> 8, 'title'=> '', 'description' => 'Description du huitième film...'],
            ['id'=> 9, 'title'=> '', 'description' => 'Description du neuvième film...'],
            ['id'=> 10, 'title'=> '', 'description' => 'Description du dixième film...'],
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