@extends('layout.app')

@section('content')
    
    <h1>{{ $movie->title }}</h1>
      <p>{{ $movie->content }}</p>

    <h3>Genre : {{ $movie->genre }}</h3>

    <img src="{{ $movie->image }}" alt="Affiche de {{ $movie->image}}">

  <br>
 <a href="/movies">Retour</a>
     <button class="btn-create">
        <a href="/movies/{{ $movie['id']}}/edit">Mettre a jour</a>
      </button>
@endsection