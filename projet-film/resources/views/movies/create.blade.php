@extends('layout.app')
@section('content')
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
            <div>
                <form action="/movies" method="POST">
                    @csrf
                        <label>Titre</label>
                        <input type="text" name="title" value="{{ old('title') }}">
                        <label>Description</label>
                        <input type="text" name="content" value="{{ old('content') }}">
                        <label>Genre</label>
                        <input type="text" name="genre" value="{{ old('genre') }}">
                        <label>Image URL</label>
                        <input type="text" name="image" value="{{ old('image') }}">
                    <button type="submit" class="btn-submit">
                        Valider le film
                    </button>
                    </form>
            </div>          
@endsection