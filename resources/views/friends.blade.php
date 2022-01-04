@extends('layouts.app')

@section('content')
    <div class="bg-light rounded m-4" style="width: 95%">
        <br>
        <h2 class="ms-4" style="font-weight: bold">Friends</h2>
        @if(session()->has('invalid'))
            <div class="bg-danger text-light ms-4 mb-2 rounded" style="width: 70%">
                <span style="font-size: 20px" class="ms-4 ">{{ session('invalid') }}</span><br>
            </div>
        @endif
        <form action="/add" method="post">
            @csrf
            <br>
            <div class="form-group ms-4">
                <label for="username" class="text-dark mb-2" style="font-weight: bold; font-size: 18px">Add Friend</label>
                <div class="d-flex">
                    <input class="form-control me-2 bg-light text-dark" style="width: 25%" type="search" name="search" placeholder="Search Username" aria-label="Search">
                    <button class="btn btn-secondary ms-2" type="submit">Add</button>
                </div>
            </div>
            <br>
        </form>
        <div>
            <label for="usernamename" class="text-dark ms-4" style="font-weight: bold; font-size: 18px">Incoming Friend Request</label>
            <div class="d-flex mb-4" style="flex-wrap: wrap">
                @php
                    $all = App\Models\Friends::where([
                        ['receiver_id', auth()->user()->id],
                        ['status', '0']
                    ])->get();
                    $countin = 0;
                @endphp
                @foreach($all as $al)
                    @php
                        $users = App\Models\User::where('id', $al->sender_id)->get();
                        $countin++;
                    @endphp
                    @foreach ($users as $us)
                        <div class="card shadow-lg ms-4 mt-3" style="width: 18rem">
                            <div class="card-body">
                                <h6 class="card-title">{{ $us->username }} <span class="badge bg-secondary rounded-pill">{{ $us->level }}</span></h6>
                                <span class="card-subtitle text-muted">
                                    @if($us->role == 1)
                                        Member
                                    @else
                                        Admin
                                    @endif
                                </span>
                                <br>
                                <div class="d-flex mt-2">
                                    <a href="/accept/{{ $al->sender_id }}" class="btn btn-secondary w-50">Accept</a>
                                    <a href="/reject/{{ $al->sender_id }}" class="btn btn-secondary ms-2 w-50">Reject</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
            @if($countin ==0)
                <span class="text-muted ms-4" style="font-weight: bold">There is no incoming friend request.</span>
            @endif
        </div>
        <br>
        <div>
            <label for="usernamename" class="text-dark ms-4" style="font-weight: bold; font-size: 18px">Pending Friend Request</label>
            <div class="d-flex mb-4" style="flex-wrap: wrap">
                @php
                    $all = App\Models\Friends::where([
                        ['sender_id', auth()->user()->id],
                        ['status', '0']
                    ])->get();
                    $countpen = 0;
                @endphp
                @foreach($all as $al)
                    @php
                        $users = App\Models\User::where('id', $al->receiver_id)->get();
                        $countpen++;
                    @endphp
                    @foreach ($users as $us)
                        <div class="card shadow-lg ms-4 mt-3" style="width: 18rem">
                            <div class="card-body">
                                <h6 class="card-title">{{ $us->username }} <span class="badge bg-secondary rounded-pill">{{ $us->level }}</span></h6>
                                <span class="card-subtitle text-muted">
                                    @if($us->role == 1)
                                        Member
                                    @else
                                        Admin
                                    @endif
                                </span>
                                <br>
                                <div class="mt-2">
                                    <a href="/cancel/{{ $al->receiver_id }}" class="btn btn-secondary w-100">Cancel</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
            @if($countpen ==0)
                <span class="text-muted ms-4" style="font-weight: bold">There is no pending friend request.</span>
            @endif
        </div>
        <br>
        <div>
            <label for="usernamename" class="text-dark ms-4" style="font-weight: bold; font-size: 18px">Your Friends</label>
            <div class="d-flex mb-4" style="flex-wrap: wrap">
                @php
                    $all = App\Models\Friends::all();
                    $countyour = 0;
                    $counting = 0 ;
                @endphp
                @foreach($all as $al)
                    @php
                        $send = App\Models\Friends::where([
                            ['sender_id', auth()->user()->id],
                            ['status', '1']
                        ])->get();

                        $res = App\Models\Friends::where([
                            ['receiver_id', auth()->user()->id],
                            ['status', '1']
                        ])->get();
                        $counting++;
                    @endphp
                @endforeach
                @if($counting != 0)
                    @foreach($send as $sen)
                        @php
                            $countyour++;
                            $use = App\Models\User::find($sen->receiver_id);
                        @endphp
                        <div class="card shadow-lg ms-4 mt-3" style="width: 18rem">
                            <div class="card-body">
                                <h6 class="card-title">{{ $use->username }} <span class="badge bg-secondary rounded-pill">{{ $use->level }}</span></h6>
                                <span class="card-subtitle text-muted">
                                    @if($use->role == 1)
                                        Member
                                    @else
                                        Admin
                                    @endif
                                </span>
                                <br>
                            </div>
                        </div>
                    @endforeach

                    @foreach($res as $sen)
                        @php
                            $countyour++;
                            $use = App\Models\User::find($sen->sender_id);
                        @endphp
                        <div class="card shadow-lg ms-4 mt-3" style="width: 18rem">
                            <div class="card-body">
                                <h6 class="card-title">{{ $use->username }} <span class="badge bg-secondary rounded-pill">{{ $use->level }}</span></h6>
                                <span class="card-subtitle text-muted">
                                    @if($use->role == 1)
                                        Member
                                    @else
                                        Admin
                                    @endif
                                </span>
                                <br>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
            @if($countyour == 0)
                <span class="text-muted ms-4" style="font-weight: bold">You have no friend.</span>
            @endif
        </div>
        <br><br>
    </div>
    <br><br>
@endsection
