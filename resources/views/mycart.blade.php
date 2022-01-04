@extends('layouts.app')

@section('content')
    <h2 class="ms-4 mb-4" style="font-weight: bold">My Shopping Cart</h2>
    @php ($count = 0)
    @php ($total = 0)
    @foreach($cart as $crt)
        <div class="ms-4 bg-light d-flex" style="width: 95%">
            <div style="width: 90%" class="d-flex">
                <br>
                <div class="mt-4 mb-4">
                    <img src="{{ $crt->game->gameDetails->imgurl }}" width="250" class="ms-4" alt="...">
                </div>
                <div>
                    <br><br>
                    <span class="ms-4" style="font-weight: bold; font-size: 20px">{{ $crt->game->title }} <span class="badge bg-dark rounded-pill">{{ $crt->game->categories->category }}</span></span>
                    <br>
                    <span class="ms-4" style="font-weight: bold; font-size: 15px;">Rp. {{ $crt->game->gameDetails->price }}</span>
                    <br><br>
                </div>
            </div>
            <div>
                <a href="/delete/{{ $crt->game->id }}" class="btn btn-secondary ps-3 pe-3 pt-3 pb-3" style="margin-top: 65%; font-weight: bold">Delete</a>
            </div>
        </div>
        @php ($count++)
        @php ($total = $total + $crt->game->gameDetails->price)
    @endforeach
    @if($count == 0)
        <center><h4 class="ms-4 mt-5" style="font-weight: bold">Your Shopping Cart is Empty</h4></center>
    @else
        <div class="ms-4 bg-white" style="width: 95%">
            <div style="width: 80%">
                <br>
                <strong><span class="ms-4 mt-4" style="font-size: 20px">Total Price: </span></strong>
                <strong><span class="ms-4 mt-4" style="font-size: 20px">Rp. {{ $total }}</span></strong>
                <br><br>
            </div>
            <div>
                <a href="/checkout/{{ $total }}" class="btn btn-secondary ps-3 pe-3 pt-2 pb-2 ms-4" style="font-weight: bold;">Checkout</a>
            </div>
            <br><br>
        </div>
        <br><br><br>
    @endif
@endsection
