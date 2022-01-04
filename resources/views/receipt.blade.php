@extends('layouts.app')

@section('content')
    <h2 class="ms-4 mb-4" style="font-weight: bold">Transaction Receipt</h2>
    <div class="bg-light rounded m-4" style="width: 95%">
        <br>
        <strong><span class="text-dark ms-4">Transaction ID: {{ $header->id }}</span></strong>
        <br>
        <strong><span class="text-dark ms-4">Purchased Date: {{ $header->created_at }}</span></strong>
        <br>
        @foreach($header->transDetail as $head)
            <div style="width: 90%" class="d-flex">
                <br>
                <div class="mt-4 mb-4">
                    <img src="{{ $head->game->gameDetails->imgurl }}" width="250" class="ms-4" alt="...">
                </div>
                <div>
                    <br><br>
                    <span class="ms-4" style="font-weight: bold; font-size: 20px">{{ $head->game->title }}</span>
                    <br>
                    <span class="ms-4" style="font-weight: bold; font-size: 15px;">Rp. {{ $head->game->gameDetails->price }}</span>
                    <br><br>
                </div>
            </div>
        @endforeach
        <div class="ms-4">
            <span style="font-size: 24px">Total Price: </span>
            <strong><span style="font-weight: bold; font-size: 24px">Rp. {{ $header->total }}</span></strong>
            <br><br>
        </div>
    </div>
@endsection
