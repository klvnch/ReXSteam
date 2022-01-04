<?php

namespace App\Http\Controllers;

use App\Models\Friends;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreFriendsRequest;
use App\Http\Requests\UpdateFriendsRequest;

class FriendsController extends Controller
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
     * @param  \App\Http\Requests\StoreFriendsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFriendsRequest $request)
    {
        //
        $countfound=0;
        $alreadyfren=0;
        $users = User::all();
        foreach($users as $us){
            if(strcmp($us->username, $request['search']) == 0){
                $countfound++;
            }
        }
        if($countfound==0){
            return redirect('/friends')->with('invalid', 'Username doesnt exist!');
        }
        if(strcmp($request['search'], Auth::user()->username) == 0){
            return redirect('/friends')->with('invalid', 'You cant add yourself!');
        }
        $countt1 = 0;
        $friends = Friends::all();
        foreach($friends as $fren){
            if(auth()->user()->id == $fren->sender_id){
                $send = Friends::where([
                    ['sender_id', auth()->user()->id],
                    ['status', '1']
                ])->get();
                foreach($send as $sen){
                    $in = 0;
                    if(auth()->user()->id == $sen->sender_id){
                        $usersY = User::where('id', $sen->receiver_id)->get();
                        $in = 1;
                    }
                    if($in != 0){
                        foreach($usersY as $use){
                            if(strcmp($use->username, $request['search']) == 0){
                                $alreadyfren++;
                            }
                        }
                    }
                }
            }
        }
        foreach($friends as $fren){
            if(auth()->user()->id == $fren->receiver_id){
                $send = Friends::where([
                    ['receiver_id', auth()->user()->id],
                    ['status', '1']
                ])->get();
                foreach($send as $sen){
                    $in = 0;
                    if(auth()->user()->id == $sen->receiver_id){
                        $usersY = User::where('id', $sen->sender_id)->get();
                        $in = 1;
                    }
                    if($in != 0){
                        foreach($usersY as $use){
                            if(strcmp($use->username, $request['search']) == 0){
                                $alreadyfren++;
                            }
                        }
                    }
                }
            }
        }
        if($alreadyfren > 0){
            return redirect('/friends')->with('invalid', 'You already friend with this user!');
        }



        $requested = 0;
        $counting = 0;
        $all = Friends::where([
            ['sender_id', auth()->user()->id],
            ['status', '0']
        ])->get();
        foreach($all as $al){
            $sent = User::where('id', $al->receiver_id)->get();
            foreach ($sent as $us){
                if(strcmp($us->username, $request['search']) == 0){
                    $requested++;
                }
            }
            $counting++;
        }
        if($counting != 0){
            if($requested > 0){
                return redirect('/friends')->with('invalid', 'You already send a friend request to this user!');
            }
        }

        $username = $request['search'];
        $sender_id = auth()->user()->id;
        $receiever = User::where('username', $username)->value('id');

        $data['sender_id'] = $sender_id;
        $data['receiver_id'] = $receiever;
        $data['status'] = 0;
        Friends::create($data);
        return redirect('/friends');
    }

    public function accept(UpdateFriendsRequest $request, $id){
        Friends::where('sender_id', $id)->update(['status' => 1]);
        return redirect('/friends');
    }

    public function reject(UpdateFriendsRequest $request, $id){
        Friends::where('sender_id', $id)->update(['status' => 2]);
        return redirect('/friends');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Friends  $friends
     * @return \Illuminate\Http\Response
     */
    public function show(Friends $friends)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Friends  $friends
     * @return \Illuminate\Http\Response
     */
    public function edit(Friends $friends)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFriendsRequest  $request
     * @param  \App\Models\Friends  $friends
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFriendsRequest $request, Friends $friends)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Friends  $friends
     * @return \Illuminate\Http\Response
     */
    public function destroy(Friends $friends, $id)
    {
        //
        Friends::where([
            ['sender_id', auth()->user()->id],
            ['receiver_id', $id]
        ])->delete();
        return redirect('/friends');
    }
}
