<?php

// use App\Http\Controllers\LivrosController;
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


// pg inicial
Route::get('/', function () {
    return view('welcome');
});

Route::get('/livros', 'App\Http\Controllers\LivrosController@index');
Route::get('/livro/{livro}', 'App\Http\Controllers\LivrosController@show');
Route::get('/livros/create', 'App\Http\Controllers\LivrosController@create');
Route::post('/livros', 'App\Http\Controllers\LivrosController@store');
Route::delete('/livros/{livro}', 'App\Http\Controllers\LivrosController@destroy');

// falta grava novo
// Route::post('/livros/{livro}', 'App\Http\Controllers\LivrosController@edit');
// update // put

// Route::resource('livros', LivrosController::class);
