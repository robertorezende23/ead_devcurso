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

Route::get('/aulas', function () {
    return view('aulas');
});
Route::get('/contato', function () {
    return view('contato');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/cursos', function () {
    return view('cursos');
});
 /*   Route::get('/faleconosco', function () {
        return view('faleconosco');
    });*/

//Route::get('/aulas', 'aulas@index');

