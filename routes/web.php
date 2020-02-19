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

Route::get('/', function () {
    $casas = App\Inmueble::paginate(5);
    return view('welcome', compact("casas"));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//RUTAS DE USUARIO
Route::get('/list', 'UserController@show')->name('list');
Route::get('/show', 'UserController@index')->name('show');
Route::post('/store', 'UserController@store')->name('store');
Route::get('/edit/{id}', 'UserController@edit')->name('edit');
Route::put('/update/{id}', 'UserController@update')->name('update');
Route::post('/eliminar/{id}', 'UserController@destroy')->name('eliminar');
