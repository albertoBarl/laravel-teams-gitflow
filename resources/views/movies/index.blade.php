@extends('layouts.app')

@section('content')
    <div class="main-container">
        <div class="row">
            @foreach ($movies as $movie)
                <div class="card">
                    <div class="card-image">
                        <a href="{{ route('movies.show', ['movie' => $movie['id']]) }}">
                            <img src="{{ $movie['thumb'] }}" alt="">
                        </a>
                    </div>
                    <a href="{{ route('movies.show', ['movie' => $movie['id']]) }}"
                        class="card-name">{{ $movie['title'] }}</a>
                    <div class="card-buttons">
                        <a href="{{ route('movies.edit', ['movie' => $movie['id']]) }}">
                            <button class="edit-movie">Modifica il fumetto</button>
                        </a>
                        <form action="{{ route('movies.destroy', ['movie' => $movie['id']]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="destroy-movie"><i class="fa-solid fa-trash"></i></button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
        <a href="{{ route('movies.create') }}">
            <button class="new-movies">Aggiungi nuovo Fumetto
    </div>
    </a>
    </div>
@endsection
