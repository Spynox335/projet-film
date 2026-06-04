@extends('layout.filter')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">

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

<div class="container">
    <h1 class="main-title">Liste des films</h1>
</div>
   <div class="tendances-row">
        {{-- La boucle qui gère tout automatiquement --}}
        @foreach($movies as $movie)
             <div class="movie-card-wrapper" title="{{ $movie['title'] }} - {{ $movie['genre'] }}&#10;&#10;{{ $movie['description'] }}">             
                <a href="/movie/{{ $movie['id'] }}" class="movie-link">
                 {{-- iteration automatiquement à 1 et augmente à chaque film --}}
                <div class="movie-number">{{ $loop->iteration }}</div>        
                {{-- Lien hypertexte de l'image issu de ma BDD --}}
                <img src="{{ $movie['image'] }}" alt="Affiche de {{ $movie['title'] }}'s poster" class="movie-poster">               
            </a>
            </div>
        @endforeach
    </div>
</div>