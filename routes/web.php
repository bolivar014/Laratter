<?php

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

/* Rutas del sitio Web. */
Route::get('/', 'PagesController@home');

Route::get('/about', 'PagesController@about');


// Rutas para el control de los mensajes..
Route::get('/messages/{message}', 'MessagesController@show');

Route::post('/messages/create', 'MessagesController@create')->middleware('auth'); // Valida que solo sean usuarios loggeados quienes utilicen este metodo
/*
Route::get('/about', function() {
    return 'Acerca De Nosotros';
});
*/

Auth::routes();

// Rutas UsersController
Route::get('/{username}', 'UsersController@show');

