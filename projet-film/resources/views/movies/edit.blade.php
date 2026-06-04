@extends('layout.app')
@section('content')
    <h1>Modifier le film</h1>
        @if($errors->any())
            <ul>
          @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
           @endforeach
            </ul>
        @endif
            <form action="/movies/{{ $movie->id }}" method="POST">
               @csrf
              @method('PUT')
                <label>Titre</label>
                <input type="text" name="title"
                value="{{ old('title', $movie->title) }}">
                <label>Description</label>
                <input type="text" name="content"
                value="{{ old('content', $movie->content) }}">
                <label>Genre</label>
                <input type="text" name="genre"
                value="{{ old('genre', $movie->genre) }}">
                <label>Image</label>
                <input type="text" name="image"
                value="{{ old('image', $movie->image) }}">
                <button type="submit">Mettre a jour</button>
        </form>
@endsection