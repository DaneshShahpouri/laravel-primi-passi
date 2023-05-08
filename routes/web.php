<?php

use Illuminate\Support\Facades\Route;

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


// Compact

Route::get('/', function () {
    $nome = 'Gianpiermaria';
    return view('home', compact('nome'));
});


//parametro
Route::get('/prova1/{parametro}', function ($parametro) {
    return 'Ciao ' . $parametro;
});


//array
Route::get('/prova2', function () {
    $data = [
        'nome1' => 'Giacomino',
        'nome2' => 'Giacomone'
    ];
    return view('home', $data);
});
