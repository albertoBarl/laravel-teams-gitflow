@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 my-3">
                <div class="d-flex justify-content-between">
                    <div>
                        <h1>ELENCO ATTORI</h1>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Titolo</th>
                            <th>Slug</th>
                            <th>Azioni</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($actors as $actor)
                        <tr>
                            <th scope="row">{{ $actor->id }}</th>
                            <td>{{ $actor->name }}</td>
                            <td>{{ $actor->slug }}</td>
                            <td>
                                <a href="{{route('actors.show', $actor->slug)}}" title="Visualizza post" class="btn btn-sm btn-square btn-primary">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{route('actors.edit', $actor->slug)}}" title="Modfica post" class="btn btn-sm btn-square btn-warning">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <button type="submit" class="btn btn-sm btn-square btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="fas fa-trash"></i>
                                </button>
                                <form class="d-inline-block" action="{{route('actors.destroy', $actor->slug)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-square btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection