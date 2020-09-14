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

Route::get('/', function () {
    return view('welcome');
});

// le route per l'autenticazione: login, password ecc
Auth::routes();

// controller home
// /home va a finire su homecontroller@index

// se aggiungo qui sotto ->middleware('auth) è un po' un alternativa alla funzione in HomeController con 
// __construct {middleware('auth');}

// qui vado per singola route e non per controller intero.
Route::get('/home', 'HomeController@index')->name('home');

// l'utente loggato avrà i privilegi per poter svolgere le crud e quindi creare, modificare e cancellare dei post

// sono regole generali da applicare ad un gruppo di route

// Route group admin
Route::prefix('admin') // prefisso dell'url che sarà creato
  ->namespace('Admin') // si riferisce alla sottocartella nostra qui nel codice, in cui si trova il controller
  ->middleware('auth') // si riferisce al fatto che solo gli utenti loggati 
                         // possono accedere a questo tipo di route
  ->group(function() {
    Route::resource('posts', 'PostController');
});