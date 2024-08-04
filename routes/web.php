<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongController;

Route::get('/', [SongController::class,'index'])->name('song');
Route::get('/add',[SongController::class,'add']);
Route::post('/addSongs',[SongController::class, 'insert'])->name('adding');