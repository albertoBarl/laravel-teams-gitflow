@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 m-3">
                <h1>MODIFICA FILM</h1>
            </div>
            <div class="class-12">
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">{{ $error }}</div>
                    @endforeach
                @endif
                <form method="POST" action="{{ route('admin.movies.update', $movie->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="form-group m-2">
                        <label class="fs-2 fw-semibold" for="title">Title</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="Add title"
                            value="{{ old('title') ?? $movie->title }}">
                        @error('title')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group m-2">
                        <label class="fs-2 fw-semibold" for="original_title">Original Title</label>
                        <input type="text" class="form-control" name="original_title" id="original_title"
                            placeholder="Add original title" value="{{ old('original_title') ?? $movie->original_title }}">
                        @error('original_title')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group my-3">
                        <label class="fs-2 fw-semibold control-label">Genere</label>
                        <select class="form-control" name="gnere_id" id="gnere_id">
                            @foreach ($genres as $genre)
                                <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group m-2">
                        <label class="fs-2 fw-semibold" for="nationality">Nationality</label>
                        <input type="text" class="form-control" name="nationality" id="nationality"
                            placeholder="Add nationality" value="{{ old('nationality') ?? $movie->nationality }}">
                        @error('nationality')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group m-2">
                        <label class="fs-2 fw-semibold" for="release_date">Release Date</label>
                        <input type="date" class="form-control" name="release_date" id="release_date"
                            placeholder="Add release date" value="{{ old('release_date') ?? $movie->release_date }}">
                        @error('release_date')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group m-2">
                        <label class="fs-2 fw-semibold" for="vote">Vote</label>
                        <input type="number" class="form-control" name="vote" id="vote" placeholder="Add vote"
                            value="{{ old('vote') ?? $movie->vote }}">
                        @error('vote')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group m-2">
                        <label class="fs-2 fw-semibold" for="cast">Cast</label>
                        <input type="text" class="form-control" name="cast" id="cast" placeholder="Add cast"
                            value="{{ old('cast') ?? $movie->cast }}">
                        @error('cast')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group m-2">
                        <label class="fs-2 fw-semibold" for="cover_path">Cover Path</label>
                        <input type="text" class="form-control" name="cover_path" id="cover_path"
                            placeholder="Add URL image" value="{{ old('cover_path') ?? $movie->cover_path }}">
                        @error('cover_path')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-success">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection
