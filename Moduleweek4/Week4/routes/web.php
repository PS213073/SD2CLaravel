<?php

use App\Http\Controllers\SongController;
use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('welcome');
});

Route::get('/songs', [SongController::class, 'index'])->name('songs');
// Route::get('/song/{id}', [SongController::class, 'show'])->name('show');
// Route::get('/song/create', [SongController::class, 'create'])->name('create');
// Route::get('/song/{id}/edit', [SongController::class, 'show'])->name('show');


