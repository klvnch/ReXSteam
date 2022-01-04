@extends('layouts.app')

@section('content')
    <h2 class="ms-4" style="font-weight: bold">Search Results</h2>
    <div class="d-flex mb-5" style="flex-wrap: wrap">
        @php
            $count = 0;
        @endphp
        @foreach($results as $gms)
            <div class="card ms-4 mt-3 bg-light text-dark shadow-lg" style="width: 19rem;">
                <a href="/games/{{ $gms->title }}">
                    <img src="{{ $gms->gameDetails->imgurl }}" class="card-img" style="opacity: 0.7" alt="...">
                </a>
                <div class="card-img-overlay-bottom ms-2 mt-1">
                    <h5 class="card-title">{{ $gms->title }}</h5>
                    <p class="card-text mb-2">{{ $gms->categories->category }}</p>
                </div>
            </div>
            @php
                $count++;
            @endphp
        @endforeach
        @if($count == 0)
            <h4 class="ms-4 mt-2" style="font-weight: bold">Game Not Found!</h4>
        @endif
    </div>
@endsection
