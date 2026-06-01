<h1>Liste des films</h1>

<ul>
    <link rel="stylesheet" href="{{ asset ('css/index.css')}}">
@foreach($movies as $movie)
    <li>
        <a href="/views/{{ $movie['id'] }}">
            {{ $movie['title'] }}
        </a>
    </li>
@endforeach
</ul>
