@section('content')
    <div class="main-container">
        <div class="row">
        @foreach ($comics as $comic)
            <div class="card">
                <div class="card-image">
                    <a href="{{ route('comics.show', ['comic' => $comic['id']] ) }}">
                        <img src="{{$comic['thumb']}}" alt="">
                    </a>
                </div>
                <a href="{{ route('comics.show', ['comic' => $comic['id']] ) }}" class="card-name">{{$comic['title']}}</a>
                <div class="card-buttons">
                    <a href="{{ route('comics.edit', ['comic' => $comic['id']] ) }}">
                        <button class="edit-comic">Modifica il fumetto</button>
                    </a>
                    <form action="{{ route('comics.destroy', ['comic' => $comic['id']] ) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="destroy-comic"><i class="fa-solid fa-trash"></i></button>
                    </form>
                </div>
            </div>
        @endforeach
        </div>
        <a href="{{ route('comics.create') }}">
            <button class="new-comics">Aggiungi nuovo Fumetto</div>
        </a>
    </div>
    <div class="blue-section">
        <div class="blue-container">
          @foreach ($itemBlueSection as $item)
            <div class="blue-section-links">
                <img src="{{ asset(Vite::asset($item['img'])) }}" alt="">
                <div class="blue-section-links-text">{{$item['description']}}</div>
            </div>
          @endforeach
        </div>
    </div>
@endsection