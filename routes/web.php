<?php

use App\Http\Controllers\SongController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::prefix('/')->group(function(){
Route::get('signin',[UserController::class, "signin"])->name('signin');
Route::get('login',[UserController::class, "login"])->name('login');
Route::post('register',[UserController::class,"register"])->name('register');
Route::post('loging',[UserController::class,"loging"])->name('loging');
Route::get('logout',[UserController::class, 'logout'])->name('logout');
})->name('auth-group');

Route::get('/', [SongController::class,'index'])->name('song');
Route::get('/show', [SongController::class,'showAll'])->name('all');
Route::get('/add',[SongController::class,'add'])->name('addSong');
Route::post('/addSongs',[SongController::class, 'insert'])->name('adding');

Route::post('/search/{keyword?}',[SongController::class, 'search'])->name('search');
Route::get('/collections',[SongController::class, 'collection'])->name('my_collection');

Route::fallback(function(){
    return redirect()->route('song'); 
});