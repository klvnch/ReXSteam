@extends('layouts.app')

@section('content')
    <h2 class="ms-4" style="font-weight: bold">Manage Games</h2>
    <h6 class="ms-4 mt-4" style="font-weight: bold">Filter by Games Name</h6>
    <form class="" action="/filter" method="GET">
        @csrf
        <input class="form-control me-2 bg-light text-dark ms-4" style="width: 30%" type="search" name="search" placeholder="Search" aria-label="Search">
        <h6 class="ms-4 mt-3" style="font-weight: bold">Filter by Games Category</h6>
        @php
            $category = App\Models\GameCategory::all();
        @endphp
        <div class="d-flex" style="flex-wrap: wrap">
            @foreach ($category as $ctgry)
                <div class="form-check ms-4 mb-4">
                    <input class="form-check-input" type="checkbox" name="category" value="{{ $ctgry->id }}" id="category">
                    <label class="form-check-label" for="category">{{ $ctgry->category }}</label>
                </div>
            @endforeach
        </div>
        <button class="btn btn-secondary ms-4" type="submit">Search</button>
    </form>
    <div class="d-flex mb-5" style="flex-wrap: wrap">
        @foreach($game as $gms)
            <div class="card ms-4 mt-3 bg-light text-dark shadow-lg" style="width: 19rem;">
                <img src="{{ $gms->gameDetails->imgurl }}" class="card-img" style="opacity: 0.7" alt="...">
                <div class="card-img-overlay-bottom ms-2 mt-1">
                    <h5 class="card-title">{{ $gms->title }}</h5>
                    <p class="card-text mb-2">{{ $gms->categories->category }}</p>
                    <div class="mb-2 mt-4">
                        <a href="/updategame/{{ $gms->title }}" class="btn btn-secondary me-2">Update</a>
                        <a href="/deletegame/{{ $gms->id }}" class="btn btn-danger">Delete</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="ms-4 mb-3">
            {{ $game->links() }}
        </div>
        <div class="ms-4 rounded" style="z-index: 1; position: fixed; bottom: 2%; right: 1%">
            <a href="/creategame" class="btn btn-primary" style="font-size: 20px; font-weight: bold">Create Game</a>
        </div>
    </div>
@endsection
