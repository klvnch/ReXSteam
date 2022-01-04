@extends('layouts.app')

@section('content')
    <h2 class="ms-4 mb-3" style="font-weight: bold">Game Details ({{ $game->title }})</h2>
    <div class="d-flex">
        <div class="ms-4">
            <iframe src="{{ $game->gameDetails->vidurl }}" class="ratio-16x9 rounded" frameborder="0" width="800" height="500" allowfullscreen></iframe>
        </div>
        <div class="ms-4" style="width: 33%">
            <img src="{{ $game->gameDetails->imgurl }}" class="rounded" alt="...">
            <h3 class="mt-3" style="font-weight: bold">{{ $game->title }}</h3>
            <p>{{ $game->gameDetails->description }}</p>
            <span class="mt-2"><strong>Genre :</strong> {{ $game->categories->category }}</span><br>
            <span><strong>Release Date :</strong> {{ $game->gameDetails->releasedate }}</span><br>
            <span><strong>Developer :</strong> {{ $game->gameDetails->developer }}</span><br>
            <span><strong>Publisher :</strong> {{ $game->gameDetails->publisher }}</span><br>
        </div>
    </div>
    <div class="ms-4 mt-4 bg-light rounded shadow-lg d-flex" style="width: 95%">
        @if(Auth::check())
            @if(Auth::user()->role == 1)
                @php
                    $cart = App\Models\Cart::where('users_id', Auth::user()->id)->get();
                    $countCart = 0
                @endphp
                @foreach($cart as $crt)
                    @if($crt->game->id == $game->id)
                        @php
                            $countCart++;
                        @endphp
                    @endif
                @endforeach
                @if($countCart > 0)
                    <div style="width: 80%">
                        <br>
                        <span class="ms-4" style="font-weight: bold; font-size: 22px">Buy {{ $game->title }}</span>
                        <br><br>
                    </div>
                    <div>
                        <a href="#" class="btn btn-secondary shadow-lg ps-3 pe-3 pt-3 pb-3 disabled" style="margin-top: 5%; font-weight: bold">ALREADY IN YOUR CART</a>
                    </div>
                @else
                    @php
                        $header = App\Models\TransactionHeader::where('users_id', auth()->user()->id)->get();
                        $countBought = 0
                    @endphp
                    @foreach($header as $hdr)
                        @foreach($hdr->transDetail as $head)
                            @if($head->game->id == $game->id)
                                @php
                                    $countBought++
                                @endphp
                            @endif
                        @endforeach
                    @endforeach
                    @if($countBought == 0)
                        <div style="width: 80%">
                            <br>
                            <span class="ms-4" style="font-weight: bold; font-size: 22px">Buy {{ $game->title }}</span>
                            <br><br>
                        </div>
                        <div>
                            <a href="/cart/{{ $game->id }}" class="btn btn-secondary shadow-lg ps-3 pe-3 pt-3 pb-3" style="margin-top: 5%; font-weight: bold">Rp. {{ $game->gameDetails->price }}   |   ADD TO CART</a>
                        </div>
                    @endif
                @endif
            @endif
        @else
            <div style="width: 80%">
                <br>
                <span class="ms-4" style="font-weight: bold; font-size: 22px">Login to Buy {{ $game->title }}</span>
                <br><br>
            </div>
        @endif
    </div>
    <div class="mb-5">
        <h4 class="ms-4 mt-4" style="font-weight: bold">ABOUT THIS GAME</h4>
        <hr size="8" class="ms-4" style="width:95%; color: black">
        <p class="ms-4">{{ $game->gameDetails->description }}</p>
    </div>
@endsection
