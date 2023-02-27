@extends('layouts.app')
@section('content')
	<div class="create">
		<div class="container">
			<div class="row">
				<div class="col">
					<h1>Aggiungi film</h1>
					<form action="{{ route('comics.update', ['movie' => $movie['id']])}}" method="POST">
						<div class="mb-4">
							<label for="">Titolo</label>
							<input type="text" value="{{ old('title') ?? $comic->title }}" class="form-control" name="original_title" placeholder="Inserisci titolo originale">
						</div>
						<div class="mb-4">
							<label for="">Titolo originale</label>
							<input type="text" value="{{ old('original_title') ?? $comic->original_title }}" class="form-control" name="original_title" placeholder="Inserisci titolo originale">
						</div>
						<div class="mb-4">
							<label for="">Nazionalità</label>
							<input type="text" value="{{ old('nationality') ?? $comic->nationality }}" class="form-control" name="nationality" placeholder="Inserisci nazionalità">
						</div>
						<div class="mb-4">
							<label for="">Data d'uscita</label>
							<input type="text" value="{{ old('release_date') ?? $comic->release_date }}" class="form-control" name="release_date" placeholder="Inserisci data d'uscita">
						</div>
						<div class="mb-4">
							<label for="">Voto</label>
							<input type="text" value="{{ old('vote') ?? $comic->vote }}" class="form-control" name="vote" placeholder="Inserisci voto">
						</div>
						<div class="mb-4">
							<label for="">Cast</label>
							<input type="text" value="{{ old('cast') ?? $comic->cast }}" class="form-control" name="cast" placeholder="Inserisci attori">
						</div>
						<div class="mb-4">
							<label for="">Tipo</label>
							<input type="text" value="{{ old('cover_path') ?? $comic->cover_path }}" class="form-control" name="cover_path" placeholder="Inserisci URL immagine">
						</div>
						<button class="btn btn-primary" type="submit">Aggiungi film</button>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection