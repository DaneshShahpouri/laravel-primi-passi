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

// Route::get('/', function () {
//     $nome = 'Gianpiermaria';
//     return view('home', compact('nome'));
// })->name('routefunction');


// //parametro
// Route::get('/prova1/{parametro1}/{parametro2?}', function ($parametro, $parametro2) {
//     return 'Ciao ' . $parametro . $parametro2;
// });


// //array
// Route::get('/prova2', function () {
//     $data = [
//         'nome1' => 'Giacomino',
//         'nome2' => 'Giacomone'
//     ];
//     return view('home', $data);
// });




Route::get('/', function () {
    $links = [
        'Home',
        'Contatti',
        'News',
        'Log-in'
    ];

    return view('Home', compact('links'));
})->name('Home');

Route::get('/Contatti', function () {
    return view('Contatti');
})->name('Contatti');

Route::get('/News', function () {
    return view('News');
})->name('News');

Route::get('/Log-in', function () {
    return view('Log-in');
})->name('Log-in');
