<?php

use App\Models\Genero;
use App\Models\Ator;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

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

Route::get ('/generos', function () {
   $camundongo = Genero::all();
   dd($camundongo);
});
Route::get ('/atores', function () {
    $camundongo2 = Ator::all();
    dd($camundongo2);
});

