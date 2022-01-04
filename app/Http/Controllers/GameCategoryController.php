<?php

namespace App\Http\Controllers;

use App\Models\GameCategory;
use App\Http\Requests\StoreGameCategoryRequest;
use App\Http\Requests\UpdateGameCategoryRequest;

class GameCategoryController extends Controller
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
     * @param  \App\Http\Requests\StoreGameCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGameCategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GameCategory  $gameCategory
     * @return \Illuminate\Http\Response
     */
    public static function show()
    {
        //
        $category = GameCategory::all();
        return $category->category;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GameCategory  $gameCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(GameCategory $gameCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGameCategoryRequest  $request
     * @param  \App\Models\GameCategory  $gameCategory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGameCategoryRequest $request, GameCategory $gameCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GameCategory  $gameCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(GameCategory $gameCategory)
    {
        //
    }
}
