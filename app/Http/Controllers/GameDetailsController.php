<?php

namespace App\Http\Controllers;

use App\Models\GameDetails;
use App\Http\Requests\StoreGameDetailsRequest;
use App\Http\Requests\UpdateGameDetailsRequest;

class GameDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreGameDetailsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGameDetailsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GameDetails  $gameDetails
     * @return \Illuminate\Http\Response
     */
    public function show(GameDetails $gameDetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GameDetails  $gameDetails
     * @return \Illuminate\Http\Response
     */
    public function edit(GameDetails $gameDetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGameDetailsRequest  $request
     * @param  \App\Models\GameDetails  $gameDetails
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGameDetailsRequest $request, GameDetails $gameDetails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GameDetails  $gameDetails
     * @return \Illuminate\Http\Response
     */
    public function destroy(GameDetails $gameDetails)
    {
        //
    }
}
