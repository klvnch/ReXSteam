@extends('layouts.app')

@section('content')
    <h2 class="ms-4" style="font-weight: bold">Top Games</h2>
    <div class="d-flex mb-5" style="flex-wrap: wrap">
        @foreach($game as $gms)
            <div class="card ms-4 mt-3 bg-light text-dark shadow-lg" style="width: 19rem;">
                @if(Auth::check())
                    @if(Auth::user()->role == 1)
                        @php
                            $header = App\Models\TransactionHeader::where('users_id', Auth::user()->id)->get();
                            $countBought = 0
                        @endphp
                        @foreach($header as $hdr)
                            @foreach($hdr->transDetail as $head)
                                @if($head->game->id == $gms->id)
                                    @php
                                        $countBought = 1
                                    @endphp
                                @endif
                            @endforeach
                        @endforeach
                        @if($countBought == 1)
                            <a href="/games/{{ $gms->title }}">
                                <img src="{{ $gms->gameDetails->imgurl }}" class="card-img" style="opacity: 0.7" alt="...">
                            </a>
                        @else
                            @if($gms->adultonly == 1)
                                <a href="/verify/{{ $gms->title }}">
                                    <img src="{{ $gms->gameDetails->imgurl }}" class="card-img" style="opacity: 0.7" alt="...">
                                </a>
                            @else
                                <a href="/games/{{ $gms->title }}">
                                    <img src="{{ $gms->gameDetails->imgurl }}" class="card-img" style="opacity: 0.7" alt="...">
                                </a>
                            @endif
                        @endif
                    @else
                        <a href="/games/{{ $gms->title }}">
                            <img src="{{ $gms->gameDetails->imgurl }}" class="card-img" style="opacity: 0.7" alt="...">
                        </a>
                    @endif
                @else
                    @if($gms->adultonly == 1)
                        <a href="/verify/{{ $gms->title }}">
                            <img src="{{ $gms->gameDetails->imgurl }}" class="card-img" style="opacity: 0.7" alt="...">
                        </a>
                    @else
                        <a href="/games/{{ $gms->title }}">
                            <img src="{{ $gms->gameDetails->imgurl }}" class="card-img" style="opacity: 0.7" alt="...">
                            </a>
                    @endif
                @endif
                <div class="card-img-overlay-bottom ms-2 mt-1">
                    <h5 class="card-title">{{ $gms->title }}</h5>
                    <p class="card-text mb-2">{{ $gms->categories->category }}</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection
