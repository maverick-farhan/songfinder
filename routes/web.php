<?php

use App\Http\Controllers\SongController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/home',[UserController::class, 'index'])->name("home");

Route::prefix('/')->group(function(){
Route::get('signin',[UserController::class, "signin"])->name('signin');
Route::get('login',[UserController::class, "login"])->name('login');
Route::post('register',[UserController::class,"register"])->name('register');
Route::post('loging',[UserController::class,"loging"])->name('loging');
})->name('auth-group');

Route::get('/', [SongController::class,'index'])->name('song');
Route::get('/add',[SongController::class,'add']);
Route::post('/addSongs',[SongController::class, 'insert'])->name('adding');

Route::post('/search/{keyword?}',[SongController::class, 'search'])->name('search');