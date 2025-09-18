<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/a', function () {
    echo 'aaaaaa';
});

Route::get ('/filmes/{filme}', function ($filme) {
    echo 'filmefilmefilmefilmefilmefilmefilmefilmefilmefilmefilmefilmefilmefilmefilmefilmefilmefilmefilmefilmefilmefilmefilme: '. $filme;
});

Route::view('/conheca', 'sobre');

