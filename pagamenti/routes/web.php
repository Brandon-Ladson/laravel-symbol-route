<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// rotta per pagamenti page
Route::get('/pagamenti', 'MainController@tornaPagamentiPage') -> name('goPagamentiPage');

// rotta per pagamenti pending
Route::get('/pagamentipending', 'MainController@tornaPagamentiPending') -> name('goPagamentiPending');
