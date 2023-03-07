@extends('layouts.app')

@section('content')
    <section class="py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="{{ $item['cover_path'] }}"
                        alt="{{ $item['title'] }}" /></div>
                <div class="col-md-6">
                    <h1 class="display-5 fw-bolder">{{ $item['title'] }}</h1>
                    <div class="fs-5 mb-5">
                        <span class="">{{ $item['original_title'] }}</span>
                    </div>
                    <div>
                        <h2>Categoria:</h2>
                        <p>{{ $item->genre ?  $item->genre->name : 'Senza categoria'}}</p>
                    </div>
                    <p class="lead"> <span class="fw-bold">Cast:</span> {{ $item['cast'] }}</p>
                    <div class="d-flex">
                        <button class="btn btn-warning me-2">
                            <i class="fa-regular fa-pen-to-square"></i>
                        </button>
                        <button class="btn btn-danger">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
