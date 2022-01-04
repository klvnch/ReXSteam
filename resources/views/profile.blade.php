@extends('layouts.app')

@section('content')
    <h2 class="ms-4 mb-4" style="font-weight: bold">Profile Setting</h2>
    <div class="bg-light rounded m-4" style="width: 95%">
        <br>
        <strong><span class="text-dark ms-4">{{ Auth::user()->username }} Profile</span></strong>
        <br>
        <span class="text-dark ms-4">This information will be displayed publicly so be careful what you share.</span>
        <br><br>
        @if(session()->has('invalid'))
            <div class="bg-danger text-light ms-4 mb-2 rounded" style="width: 70%">
                <span style="font-size: 20px" class="ms-4 ">{{ session('invalid') }}</span><br>
            </div>
        @endif
        <br>
        <form action="/updateprof" method="POST">
            @csrf
            <div class="ms-4">
                <label for="username" class="text-dark mb-2 col-8" style="font-weight: bold">Username</label>
                <label for="level" class="text-dark mb-2 col-2" style="font-weight: bold; margin-left: 5.5%">Level</label>
            </div>
            <div class="form-group ms-4 d-flex" style="width: 98%">
                <div class="col-8">
                    <input type="text" class="form-control" value="{{ Auth::user()->username }}" placeholder="Username" name="username" style="width: 107%" id="username">
                </div>
                <div class="col-3">
                    <input type="tel" class="form-control" style="margin-left: 24%; width: 102%" value="{{ Auth::user()->level }}" placeholder="Level" name="level" id="level">
                </div>
            </div>
            <br>
            <div class="form-group ms-4">
                <label for="fullname" class="text-dark mb-2" style="font-weight: bold">Full Name</label>
                <input type="text" class="form-control" value="{{ Auth::user()->fullname }}" placeholder="Full Name" name="fullname" style="width: 98%" id="fullname">
            </div>
            <br>
            <div class="form-group ms-4">
                <label for="password" class="text-dark mb-2" style="font-weight: bold">Current Password</label>
                <input type="password" class="form-control" placeholder="Current Password" name="oldpass" style="width: 98%" id="oldpass">
                <label for="text" class="text-danger mt-1">Fill out this field to check if you are authorized.</label>
            </div>
            <br>
            <div class="form-group ms-4">
                <label for="password" class="text-dark mb-2" style="font-weight: bold">New Password</label>
                <input type="password" class="form-control" placeholder="New Password" name="newpass" style="width: 98%" id="newpass">
                <label for="text" class="text-danger mt-1">Only if you want to change password</label>
            </div>
            <br>
            <div class="form-group ms-4">
                <label for="password" class="text-dark mb-2" style="font-weight: bold">Confirm Password</label>
                <input type="password" class="form-control" placeholder="Confirm Password" name="confpass" style="width: 98%" id="confpass">
                <label for="text" class="text-danger mt-1">Only if you want to change password</label>
            </div>
            <br><br>
            <button type="submit" class="btn-dark btn ms-4 mb-5">Update Profile</button>
        </form>
    </div>
@endsection
