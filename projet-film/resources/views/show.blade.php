
<link rel="stylesheet" href="{{ asset('css/show.css') }}">

<header>
    <a href="/index">Acceuil</a>
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
