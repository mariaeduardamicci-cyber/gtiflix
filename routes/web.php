<?php

use App\Models\Genero;
use App\Models\Ator;
use App\Models\Nacionalidade;
use App\Models\Produtora;
use App\Models\Diretor;
use App\Models\Filme;
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
Route::get ('/nacionalidades', function () {
    $camundongo3 = Nacionalidade::all();
    dd($camundongo3);
});
Route::get ('/produtoras', function () {
    $camundongo4 = Produtora::all();
    dd($camundongo4);
});
Route::get ('/diretores', function () {
    $camundongo5 = Diretor::all();
    dd($camundongo5);
});
Route::get ('/filmes', function () {
    $camundongo6 = Filme::all();
    dd($camundongo6);
});
