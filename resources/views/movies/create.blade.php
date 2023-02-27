@extends('layouts.app')
@section('content')
	<div class="create">
		<div class="container">
			<div class="row">
				<div class="col">
					<h1>Aggiungi film</h1>
					<form action="{{ "movies.store" }}" method="POST">
						<div class="mb-4">
							<label for="">Titolo</label>
							<input type="text" class="form-control" name="title" placeholder="Inserisci titolo">
						</div>
						<div class="mb-4">
							<label for="">Titolo originale</label>
							<input type="text" class="form-control" name="original_title" placeholder="Inserisci titolo originale">
						</div>
						<div class="mb-4">
							<label for="">Nazionalità</label>
							<input type="text" class="form-control" name="nationality" placeholder="Inserisci nazionalità">
						</div>
						<div class="mb-4">
							<label for="">Data d'uscita</label>
							<input type="text" class="form-control" name="release_date" placeholder="Inserisci data d'uscita">
						</div>
						<div class="mb-4">
							<label for="">Voto</label>
							<input type="text" class="form-control" name="vote" placeholder="Inserisci voto">
						</div>
						<div class="mb-4">
							<label for="">Cast</label>
							<input type="text" class="form-control" name="cast" placeholder="Inserisci attori">
						</div>
						<div class="mb-4">
							<label for="">Tipo</label>
							<input type="text" class="form-control" name="cover_path" placeholder="Inserisci URL immagine">
						</div>
						<button class="btn btn-primary" type="submit">Aggiungi film</button>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection