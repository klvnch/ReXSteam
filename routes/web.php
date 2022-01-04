<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\FriendsController;
use App\Http\Controllers\GamesController;
use App\Http\Controllers\TransactionHeaderController;
use App\Http\Controllers\UpdateProfileController;
use App\Http\Controllers\AgeVerificationController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [GamesController::class, 'index']);
Route::get('/games/{games:title}', [GamesController::class, 'show'])->name('detail');
Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/register', function () {
    return view('auth.register');
});


Route::get('/cartlist', [CartController::class, 'index'])->name('cartlist')->middleware('auth');
Route::get('/cart/{games:id}', [CartController::class, 'store'])->middleware('auth');
Route::get('/delete/{games:id}', [CartController::class, 'deleteCart'])->middleware('auth');
Route::get('/receipt', [TransactionHeaderController::class, 'index'])->middleware('auth');
Route::get('/history', [TransactionHeaderController::class, 'history'])->middleware('auth');
Route::get('/verify/{games:title}', [GamesController::class, 'verify'])->name('verifage');
Route::get('/managegame', [GamesController::class, 'manage'])->middleware('auth');
Route::get('/filter', [GamesController::class, 'filter'])->middleware('auth');
Route::get('/deletegame/{games:id}',[GamesController::class, 'deleteGame'])->middleware('auth');
Route::get('/updategame/{games:title}',[GamesController::class, 'updateGame'])->name('updategame')->middleware('auth');
Route::get('/cancel/{id}', [FriendsController::class, 'destroy'])->middleware('auth');
Route::get('/accept/{id}', [FriendsController::class, 'accept'])->middleware('auth');
Route::get('/reject/{id}', [FriendsController::class, 'reject'])->middleware('auth');

Route::get('/checkout/{total}', function($totals){
    return view('checkout', ['total' => $totals]);
})->middleware('auth');
Route::get('/profile', function(){
    return view('profile');
})->middleware('auth');
Route::get('/creategame', function () {
    return view('creategame');
})->middleware('auth');
Route::get('/friends', function () {
    return view('friends');
})->middleware('auth');

Auth::routes();


Route::post('/regpro', [RegisterController::class, 'store']);
Route::post('/logpro', [LoginController::class, 'login']);
Route::post('/trans/{total}', [TransactionHeaderController::class, 'store']);
Route::post('/search', [GamesController::class, 'store']);
Route::post('/updateprof', [UpdateProfileController::class, 'update']);
Route::post('/update/{games:title}', [GamesController::class, 'update']);
Route::post('/verif/{games:title}', [AgeVerificationController::class, 'verify']);
Route::post('/create', [GamesController::class, 'insert']);
Route::post('/add', [FriendsController::class, 'store']);
