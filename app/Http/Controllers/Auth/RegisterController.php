<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(Request $data)
    {
        return Validator::make($data, [
            'username' => ['required', 'string', 'min:6', 'unique:users'],
            'fullname' => ['required', 'string'],
            'password' => ['required', 'string', 'min:6'],
            'role' => ['required', 'string']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    public function store(Request $request){
        $validateData = $request->validate([
            'username' => ['required', 'string', 'min:6', 'unique:users'],
            'fullname' => ['required', 'string'],
            'password' => ['required', 'string', 'min:6'],
            'role' => ['required'],
        ]);
        if($validateData['role'] == 0){
            return redirect('/register')->with('registerError', 'Please choose the role');
        }

        $validateData['password'] = Hash::make($validateData['password']);
        $data['username'] = $validateData['username'];
        $data['fullname'] = $validateData['fullname'];
        $data['password'] = $validateData['password'];
        $data['role'] = $validateData['role'];
        $data['level'] = 0;
        User::create($data);

        return redirect('/login')->with('registersuccess','Your account has been registered!');
    }
}
