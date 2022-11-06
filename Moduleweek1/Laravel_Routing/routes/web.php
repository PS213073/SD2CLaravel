<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Test_Controller;
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

Route::get('/home', function () {
    return view('home',['title' => 'Home']);
});

Route::get('/about', function () {
    return view('aboutus',['title' => 'About Us']);
});

Route::get('/contact', function(){
    return view('contact',['title' => 'Contact Us']);
});

Route::get('/webdesign', function(){
    $css = ['CSS', 'Sass', 'Bootstrap', 'Tailwind css'];
    return view('webdesign',['title' => 'Web Design'], ['designs' => $css]);
});

Route::get('/seo', function(){
    return view('seo',['title' => 'SEO']);
});

Route::get('/hosting', function(){
    return view('hosting',['title' => 'Hosting']);
});

// Route::get('/teams', [TeamController::class, 'index'])->Name('teams');