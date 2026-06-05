@extends('layout.app')

@section('head')    
@endsection

@section('content')
      
  <div class="container">
    <div class="movie-card">     
        <article class="article">
            <h1>{{ $movie->title }}</h1>
            <img src="{{ $movie->image }}" alt="Affiche de {{ $movie->title }}" class="image">
        </article>
        <article class="desc">
            <p>{{ $movie->content }}</p>
            <h3>Genre : {{ $movie->genre }}</h3>
        </article>
        <div class="actions-container">
            <a href="/movies" class="btn-movie btn-secondary">Retour aux films</a>
            <button class="btn-movie btn-primary">
                <a href="/movies/{{ $movie['id'] }}/edit">Modifier</a>
            </button>
        </div>

    </div>
</div>
@endsection