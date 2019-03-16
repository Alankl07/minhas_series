<?php
use App\Genero;
use App\Serie;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/generos', function(){
    $generos = Genero::all();
    foreach($generos as $genero){
        echo "ID: " .$genero->id . "<br>";
        echo "Nome: " .$genero->Nome . "<br>";
    }
});

Route::get('/series', function(){
    $series = Serie::all();
    foreach($series as $serie){
        echo "ID: " .$serie->id. "<br>";
        echo "Nome: " .$serie->Nome. "<br>";
        echo "Genero_ID: " .$serie->genero_id. "<br>";
        echo "Sinopse: " .$serie->Sinopse. "<br>";
    }
});
