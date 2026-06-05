@extends('layout.app')
@section('head')

@endsection

@section('content')
          <div class="container">
             <div class="filter-container">
                 <label for="genreFilter" style="font-size: 18px; font-weight: bold;">Films</label>   
                {{-- Le select utilise l'événement on change pour soumettre la page avec la valeur choisie --}}
                     <select id="genreFilter" class="genre-select" onchange="location = this.value;">
                          {{-- Option par défaut pour afficher tous les films --}}
                      <option value="/movies">Genres</option>          
                      {{-- Boucle pour afficher dynamiquement tous les genres de la BDD dans le menu --}}
                @foreach($genres as $genre)
                    <option value="{{ route('movies.index', ['genre' => $genre]) }}" 
                        {{ request('genre') == $genre ? 'selected' : '' }}>
                        {{ $genre }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="hero-container">     
            <div class="background-wall"></div>             
            <div class="overlay"></div>

                <header class="header">
                    <a href="/" class="logo">Xilfen</a>
                    <div class="nav-buttons">
                        <a href="#" class="btn-login">S'identifier</a>
                    </div>
                </header>

                <main class="main-content">
                    <h1 class="main-title">Films et séries en<br>illimité, et bien plus</h1>            
                </main>
    </div>
        <div class="video">
                <video autoplay muted loop src="https://res.cloudinary.com/djnznhund/video/upload/v1780624721/ScreenRecording_06-05-2026_03-49-49_1_e8eolz.mov" type="video/mp4" class="video"></video> 
          </div>
       <div class="all-aperçu">
             <div><h1 class="t7">Tendances</h1></div>
                                                         <div class="all-img">
                                                                 <img src="https://i.pinimg.com/736x/c8/c4/6a/c8c46a0a8bb31d12d328868e6851288c.jpg" alt="image" class="radisson">
                                                                 <img src="https://i.pinimg.com/1200x/a0/89/02/a089021db77d9e292e7ea04604e97d90.jpg" alt="image"class="aeroport">
                                                                 <img src="https://i.pinimg.com/1200x/c1/e3/52/c1e35284d6269841a0f4d78d378d8687.jpg" alt="" class="elephants">
                                                                 <img src="https://i.pinimg.com/1200x/ff/0a/d7/ff0ad766f4e3bec4473bd536ffbe7e21.jpg" class="gorille">
                                                                 <img src="https://i.pinimg.com/736x/29/a4/16/29a416d87bb19111aa23098d5e838216.jpg" alt="image" class="viaduque">
                                                                 <img src="https://i.pinimg.com/736x/b3/ba/b7/b3bab77e4d5ddcb54beacae395ae6c19.jpg" class="basilic">
                                                        </div>
                         </div>

    <div class="container">
             <div class="tendances-row">
                @foreach($movies as $movie)
                    <div class="movie-card-wrapper" title="{{ $movie['title'] }} - {{ $movie['genre'] }}&#10;&#10;{{ $movie['description'] }}">             
                        <a href="/movie/{{ $movie['id'] }}" class="movie-link">
                           <div class="movie-number">{{ $loop->iteration }}</div>        
                            <img src="{{ $movie['image'] }}" alt="Affiche de {{ $movie['title'] }}'s poster" class="movie-poster">               
                        </a>
                    </div>
                @endforeach
        </div>  
    </div>

 @endsection