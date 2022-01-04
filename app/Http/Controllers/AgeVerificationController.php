<?php

namespace App\Http\Controllers;
use App\Http\Controllers\GamesController;
use Illuminate\Http\Request;
use App\Models\Games;

class AgeVerificationController extends Controller
{
    //
    public function verify(Request $request, Games $games){
        $validate = $request->validate([
            'day' => ['required'],
            'month' => ['required'],
            'year' => ['required'],
        ]);
        if($validate['day'] == 0 || $validate['month'] == 0 || $validate['year'] == 0){
            return redirect()->back()->with('invalid', 'Invalid input!');
        }
        $dataYear = $validate['year'];
        $currYear = date("Y");
        if($currYear - $dataYear < 17){
            return redirect()->back()->with('invalid', 'Your age is below 17, youre not eligible to see this!');
        }else{
            return redirect()->route('detail', [$games]);
        }
    }
}
