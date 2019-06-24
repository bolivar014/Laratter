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

/*  */
Route::get('/', function () {
    $links = [
        'https://platzi.com/laravel' => 'Curso De Laravel',
        'https://laravel.com' => 'Pagina Oficial De Laravel'
    ];

    return view('welcome',[
        'user' => 'Juan Camilo Valdes Bolivar',
        'links' => $links,
    ]);
});

Route::get('/about', function() {
    return view('about');
});

/*
Route::get('/about', function() {
    return 'Acerca De Nosotros';
});
*/
