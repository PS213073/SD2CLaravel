<?php

use App\Http\Controllers\SongController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;




Route::get('/home', function () {
    return view('home');
});

route::get('/title', 'App\Http\Controllers\SongController@index');
route::get('/details/{id}', 'App\Http\Controllers\SongController@show');

Route::get('/create', function () {
    return view('songs.create');
});

Route::post('/create2', 'App\Http\Controllers\SongController@store');