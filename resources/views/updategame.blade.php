@extends('layouts.app')

@section('content')
    <h2 class="ms-4" style="font-weight: bold">Update Game ({{ $game->title }})</h2>
    @if(session()->has('invalid'))
        <div class="bg-danger text-light ms-4 mb-2 rounded" style="width: 70%">
            <span style="font-size: 20px" class="ms-4 ">{{ session('invalid') }}</span><br>
        </div>
    @endif
    <form action="/update/{{ $game->title }}" method="post">
        @csrf
        <div class="form-group ms-4 mt-4">
            <label for="gamename" class="text-dark mb-2 col-8" style="font-weight: bold; font-size: 18px">Game Title</label>
            <input type="text" disabled class="form-control" value="{{ $game->title }}" placeholder="Game Title" name="gamename" style="width: 96%" id="gamename">
        </div>
        <div class="form-group ms-4 mt-4">
            <label for="gamedesc" class="text-dark mb-2 col-8" style="font-weight: bold; font-size: 18px">Game Description</label>
            <textarea class="form-control" name="gamedesc" id="gamedesc" style="width: 96%; resize: none" rows="5">{{ $game->gameDetails->description }}</textarea>
            <label for="text" class="text-danger mt-1">Write some sentences about the game</label>
        </div>
        <div class="form-group ms-4 mt-4">
            <label for="gamename" class="text-dark mb-2 col-8" style="font-weight: bold; font-size: 18px">Game Developer</label>
            <input type="text" class="form-control" value="{{ $game->gameDetails->developer }}" placeholder="Game Developer" name="gamedeveloper" style="width: 96%" id="gamedeveloper">
            <label for="text" class="text-danger mt-1">Write the game developer name</label>
        </div>
        <div class="form-group ms-4 mt-4">
            <label for="gamename" class="text-dark mb-2 col-8" style="font-weight: bold; font-size: 18px">Game Publisher</label>
            <input type="text" class="form-control" value="{{ $game->gameDetails->publisher }}" placeholder="Game Publisher" name="gamepublisher" style="width: 96%" id="gamepublisher">
            <label for="text" class="text-danger mt-1">Write the game publisher name</label>
        </div>
        <div class="form-group ms-4 mt-4">
            <label for="gamename" class="text-dark mb-2 col-8" style="font-weight: bold; font-size: 18px">Game Release Date</label>
            <input type="text" class="form-control" value="{{ $game->gameDetails->releasedate }}" placeholder="Game Release Date" name="gamereleasedate" style="width: 96%" id="gamereleasedate">
            <label for="text" class="text-danger mt-1">Write the game release date</label>
        </div>
        <div class="form-group ms-4 mt-4">
            <label for="gamename" class="text-dark mb-2 col-8" style="font-weight: bold; font-size: 18px">Game Category</label>
            <select name="gamecategory" id="category" class="form-select" style="width: 96%">
            @php
                $category = App\Models\GameCategory::all();
            @endphp
            @foreach ($category as $ctgry)
                @if($ctgry->id == $game->category_id)
                    <option value="{{$ctgry->id}}" selected>{{$ctgry->category}}</option>
                @else
                    <option value="{{$ctgry->id}}">{{$ctgry->category}}</option>
                @endif
            @endforeach
            </select>
            <label for="text" class="text-danger mt-1">Choose game category</label>
        </div>
        <div class="form-group ms-4 mt-4">
            <label for="gamename" class="text-dark mb-2 col-8" style="font-weight: bold; font-size: 18px">Game Price</label>
            <input type="text" class="form-control" value="{{ $game->gameDetails->price }}" placeholder="Game Price" name="gameprice" style="width: 96%" id="gameprice">
            <label for="text" class="text-danger mt-1">Write the game price</label>
        </div>
        <div class="form-group ms-4 mt-4">
            <label for="gamename" class="text-dark mb-2 col-8" style="font-weight: bold; font-size: 18px">Game Image</label>
            <input type="text" class="form-control" value="{{ $game->gameDetails->imgurl }}" placeholder="Game Image" name="gameimg" style="width: 96%" id="gameimg">
            <label for="text" class="text-danger mt-1">Insert Game Image (with URL)</label>
        </div>
        <div class="form-group ms-4 mt-4">
            <label for="gamename" class="text-dark mb-2 col-8" style="font-weight: bold; font-size: 18px">Game Trailer</label>
            <input type="text" class="form-control" value="{{ $game->gameDetails->vidurl }}" placeholder="Game Trailer" name="gamevid" style="width: 96%" id="gamevid">
            <label for="text" class="text-danger mt-1">Insert Game Trailer (with URL)</label>
        </div>
        <br>
        <div class="mb-5 d-flex">
            <a class="btn btn-light ms-4" href="/managegame">Cancel</a>
            <button type="submit" class="btn-secondary btn ms-2" style="width: 8%">Save</button>
        </div>
    </form>
@endsection
