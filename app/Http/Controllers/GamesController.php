<?php

namespace App\Http\Controllers;

use App\Models\Games;
use App\Models\GameDetails;
use App\Models\TransactionDetail;
use App\Http\Requests\StoreGamesRequest;
use App\Http\Requests\UpdateGamesRequest;
use App\Models\Cart;
use Illuminate\Support\Facades\Request;

class GamesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('home', [
            'game' => Games::all()->random(8)
        ]);
    }

    public function manage()
    {
        //
        return view('gamemgmt', [
            'game' => Games::simplePaginate(8)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGamesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function insert(StoreGamesRequest $request){
        $validate = $request->validate([
            'gamename' => ['required', 'string', 'unique:games'],
            'gamecategory' => ['required'],
            'adultonly' => ['required'],
            'gameimg' => ['required'],
            'gamevid' => ['required'],
            'gamedesc' => ['required'],
            'gamedeveloper' => ['required'],
            'gamepublisher' => ['required'],
            'gamereleasedate' => ['required'],
            'gameprice' => ['required']
        ]);
        $Headerdata['category_id'] = $validate['gamecategory'];
        $Headerdata['title'] = $validate['gamename'];
        $Headerdata['adultonly'] = $validate['adultonly'];
        Games::create($Headerdata);

        $game = Games::latest()->first();
        $Detaildata['games_id'] = $game->id;
        $Detaildata['imgurl'] = $validate['gameimg'];
        $Detaildata['vidurl'] = $validate['gamevid'];
        $Detaildata['description'] = $validate['gamedesc'];
        $Detaildata['developer'] = $validate['gamedeveloper'];
        $Detaildata['publisher'] = $validate['gamepublisher'];
        $Detaildata['releasedate'] = $validate['gamereleasedate'];
        $Detaildata['price'] = $validate['gameprice'];

        GameDetails::create($Detaildata);

        return redirect('/managegame');
    }

    public function store(StoreGamesRequest $request)
    {
        //
        $searchData = $request['search'];
        $results = Games::where('title', 'like', '%'.$searchData.'%')->get();
        return view('search', ['results' => $results]);
    }

    public function filter(StoreGamesRequest $request)
    {
        //
        $category = $request['category'];
        $searchData = $request['search'];
        if($category != null){
            $results = Games::where('category_id', 'like', '%'.$category.'%')->simplePaginate(8);
        }else if($searchData != null){
            $results = Games::where('title', 'like', '%'.$searchData.'%')->simplePaginate(8);
        }else if($category != null && $searchData != null){
            $results = Games::select('*')->where([
                ['title', 'like', '%'.$searchData.'%'],
                ['category_id', 'like', '%'.$category.'%']
            ])->first();
        }else{
            $results = Games::simplePaginate(8);
        }
        return view('gamemgmt', ['game' => $results]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Games  $games
     * @return \Illuminate\Http\Response
     */
    public function show(Games $games)
    {
        //
        return view('gamedetail', [
            "game" => $games
        ]);
    }

    public function verify(Games $games)
    {
        //
        return view('verifage', [
            "game" => $games
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Games  $games
     * @return \Illuminate\Http\Response
     */
    public function edit(Games $games)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGamesRequest  $request
     * @param  \App\Models\Games  $games
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGamesRequest $request, Games $games)
    {
        //
        $validate = $request->validate([
            'gamecategory' => ['required'],
            'gameimg' => ['required'],
            'gamevid' => ['required'],
            'gamedesc' => ['required'],
            'gamedeveloper' => ['required'],
            'gamepublisher' => ['required'],
            'gamereleasedate' => ['required'],
            'gameprice' => ['required']
        ]);
        $Headerdata['category_id'] = $validate['gamecategory'];
        $Headerdata['title'] = $games->title;

        $Detaildata['games_id'] = $games->id;
        $Detaildata['imgurl'] = $validate['gameimg'];
        $Detaildata['vidurl'] = $validate['gamevid'];
        $Detaildata['description'] = $validate['gamedesc'];
        $Detaildata['developer'] = $validate['gamedeveloper'];
        $Detaildata['publisher'] = $validate['gamepublisher'];
        $Detaildata['releasedate'] = $validate['gamereleasedate'];
        $Detaildata['price'] = $validate['gameprice'];

        Games::where('id', $games->id)->update($Headerdata);
        GameDetails::where('games_id', $games->id)->update($Detaildata);
        return redirect('/managegame');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Games  $games
     * @return \Illuminate\Http\Response
     */
    public function deleteGame($games_id)
    {
        //
        $games = Games::where('id', $games_id);
        $detail = GameDetails::where('games_id', $games_id);
        $transDetail = TransactionDetail::where('games_id', $games_id);
        $games->delete();
        $detail->delete();
        $transDetail->delete();
        return redirect('/managegame');
    }

    public function updateGame(Games $games){
        // $game = Games::where('id', $games_id)->get();
        return view('updategame', [
            "game" => $games
        ]);
    }
}
