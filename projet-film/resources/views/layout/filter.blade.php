
<div class="container">
    <div class="filter-container">
        <label for="genreFilter" style="font-size: 18px; font-weight: bold;">Films</label>   
        {{-- Le select utilise l'événement on change pour soumettre la page avec la valeur choisie --}}
        <select id="genreFilter" class="genre-select" onchange="location = this.value;">
            {{-- Option par défaut pour afficher tous les films --}}
            <option value="{{ route('movies.index') }}">Genres</option>          
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