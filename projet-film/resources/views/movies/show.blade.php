@extends('layout.app')

@section('content')
      
  <header>
      <a href="/movies">Acceuil</a>
  </header>   
  <article class="article">
      <h1>{{ $movie->title }}</h1>
      <img src="{{ $movie->image }} " alt="Affiche de {{ $movie->title }}" class="image">
  </article>
  <article class="desc">
      <p>{{ $movie->content }}</p>
      <h3>Genre : {{ $movie->genre }}</h3>
  </article>

  <br>

 <a href="/movies">Retour</a>
     <button class="btn-create">
        <a href="/movies/{{ $movie['id']}}/edit">Mettre a jour</a>
      </button>
@endsection