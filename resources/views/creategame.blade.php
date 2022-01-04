@extends('layouts.app')

@section('content')
    <h2 class="ms-4" style="font-weight: bold">Create Game</h2>
    <form action="/create" method="post">
        @csrf
        <div class="form-group ms-4 mt-4">
            <label for="gamename" class="text-dark mb-2 col-8" style="font-weight: bold; font-size: 18px">Game Title</label>
            <input type="text" class="form-control" placeholder="Game Title" name="gamename" style="width: 96%" id="gamename">
        </div>
        <div class="form-group ms-4 mt-4">
            <label for="gamedesc" class="text-dark mb-2 col-8" style="font-weight: bold; font-size: 18px">Game Description</label>
            <textarea class="form-control" name="gamedesc" id="gamedesc" placeholder="Game Description" style="width: 96%; resize: none" rows="5"></textarea>
            <label for="text" class="text-danger mt-1">Write some sentences about the game</label>
        </div>
        <div class="form-group ms-4 mt-4">
            <label for="gamename" class="text-dark mb-2 col-8" style="font-weight: bold; font-size: 18px">Game Developer</label>
            <input type="text" class="form-control" placeholder="Game Developer" name="gamedeveloper" style="width: 96%" id="gamedeveloper">
            <label for="text" class="text-danger mt-1">Write the game developer name</label>
        </div>
        <div class="form-group ms-4 mt-4">
            <label for="gamename" class="text-dark mb-2 col-8" style="font-weight: bold; font-size: 18px">Game Publisher</label>
            <input type="text" class="form-control" placeholder="Game Publisher" name="gamepublisher" style="width: 96%" id="gamepublisher">
            <label for="text" class="text-danger mt-1">Write the game publisher name</label>
        </div>
        <div class="form-group ms-4 mt-4">
            <label for="gamename" class="text-dark mb-2 col-8" style="font-weight: bold; font-size: 18px">Game Release Date</label>
            <input type="text" class="form-control" placeholder="Game Release Date" name="gamereleasedate" style="width: 96%" id="gamereleasedate">
            <label for="text" class="text-danger mt-1">Write the game release date</label>
        </div>
        <div class="form-group ms-4 mt-4">
            <label for="gamename" class="text-dark mb-2 col-8" style="font-weight: bold; font-size: 18px">Game Category</label>
            <select name="gamecategory" id="category" class="form-select" style="width: 96%">
                <option value="0" selected>Category</option>
                @php
                    $category = App\Models\GameCategory::all();
                @endphp
                @foreach ($category as $ctgry)
                    <option value="{{$ctgry->id}}">{{$ctgry->category}}</option>
                @endforeach
            </select>
            <label for="text" class="text-danger mt-1">Choose game category</label>
        </div>
        <div class="form-group ms-4 mt-4">
            <label for="gamename" class="text-dark mb-2 col-8" style="font-weight: bold; font-size: 18px">Game Price</label>
            <input type="text" class="form-control" placeholder="Game Price" name="gameprice" style="width: 96%" id="gameprice">
            <label for="text" class="text-danger mt-1">Write the game price</label>
        </div>
        <div class="form-group ms-4 mt-4">
            <label for="gamename" class="text-dark mb-2 col-8" style="font-weight: bold; font-size: 18px">Game Image</label>
            <input type="text" class="form-control" placeholder="Game Image" name="gameimg" style="width: 96%" id="gameimg">
            <label for="text" class="text-danger mt-1">Insert Game Image (with URL)</label>
        </div>
        <div class="form-group ms-4 mt-4">
            <label for="gamename" class="text-dark mb-2 col-8" style="font-weight: bold; font-size: 18px">Game Trailer</label>
            <input type="text" class="form-control" placeholder="Game Trailer" name="gamevid" style="width: 96%" id="gamevid">
            <label for="text" class="text-danger mt-1">Insert Game Trailer (with URL)</label>
        </div>
        <div class="form-group ms-4 mt-4">
            <label for="gamename" class="text-dark mb-2 col-8" style="font-weight: bold; font-size: 18px">Game Category</label>
            <select name="adultonly" id="adultonly" class="form-select" style="width: 96%">
                <option value="1" selected>Yes</option>
                <option value="2">No</option>
            </select>
            <label for="text" class="text-danger mt-1">Is this game for adult only?</label>
        </div>
        <br>
        <div class="mb-5 d-flex">
            <a class="btn btn-light ms-4" href="/managegame">Cancel</a>
            <button type="submit" class="btn-secondary btn ms-2" style="width: 8%">Create</button>
        </div>
    </form>
@endsection
