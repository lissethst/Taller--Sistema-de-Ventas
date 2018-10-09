<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('almacen/categoria','CategoriaController');
<<<<<<< HEAD

Route::resource('ventas/cliente','ClienteController');

//Route::auth();

//Route::get('/home', 'HomeController@index');
=======
Route::resource('almacen/articulo','ArticuloController');

Route::auth();


>>>>>>> 84ade9df2fd89095d3a45ad5e419dd2242da76f3
