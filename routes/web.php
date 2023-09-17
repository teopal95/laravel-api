<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GamesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $games = DB::table('games')->get();
    return view('welcome',[
    'games'=>$games
    ]);
});


//Route::get('/games', [GamesController::class,'index'])->name('games.index');
//Route::get('/games/create', [GamesController::class,'create'])->name('games.create');
//Route::post('/games', [GamesController::class,'add'])->name('games.add');
