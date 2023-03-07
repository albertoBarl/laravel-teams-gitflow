@extends('layouts.app')

@section('content')
    <div class="movies bg-black" data-bs-theme="dark">
        <div class="container py-5">
            <div class="row">

                {{-- movie --}}
                @foreach ($movies as $movie)
                    <div class="col-12 col-sm-6 col-md-3">

                        {{-- card --}}
                        <div class="card my-bg-info-subtle text-light border border-info mb-4">
                            <img src="{{ $movie['cover_path'] }}" class="card-img-top w-100" alt="...">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">{{ $movie['title'] }}</h5>
                                <ul class="list-unstyled">
                                    <li><span class="fw-bold">Nationality:</span> {{ $movie['nationality'] }}</li>
                                    <li><span class="fw-bold">Release date:</span> {{ $movie['release_date'] }}</li>
                                    <li><span class="fw-bold">Vote:</span> {{ $movie['vote'] }}</li>
                                </ul>
                                <div class="d-flex gap-2 flex-wrap">
                                    <a href="{{ route('movies.edit', ['movie' => $movie['id']]) }}"><button class="btn btn-warning"><i class="fa-regular fa-pen-to-square"></i></button></a>
                                    <form action="{{ route('movies.destroy', ['movie' => $movie['id']]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger"><i class="fa-solid fa-dumpster-fire"></i></button>
                                    </form>
                                    <a href="{{ route('movies.show', $movie->id) }}"><button class="btn btn-info">More info <i class="fa-solid fa-circle-info"></i></button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <a href="{{ route('movies.create') }}">

                    <button class="btn btn-outline-warning">Add new movie <i class="fa-solid fa-plus"></i></button>

                </a>
            </div>
        </div>
    </div>
@endsection
