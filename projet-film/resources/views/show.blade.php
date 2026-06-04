
<link rel="stylesheet" href="{{ asset('css/show.css') }}">



    
    <h1>{{ $movie->title }}</h1>
      <p>{{ $movie->content }}</p>

    <h3>Genre : {{ $movie->genre }}</h3>

    <img src="{{ $movie->image }}" alt="Affiche de {{ $movie->title }}">


<br>
<a href="/index">Retour</a>