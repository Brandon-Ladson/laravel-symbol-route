<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// rotta per home
Route::get('/home', 'TempController@tornaHome') -> name('goHome');

// rotta per blog
Route::get('/blog', 'TempController@tornaBlog') -> name('goBlog');

// rotta per about
Route::get('/about', 'TempController@tornaAbout') -> name('goAbout');
