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
    return view('auth/login');
});

Route::resource('almacen/categoria','CategoriaController');
Route::resource('ventas/cliente','ClienteController');
Route::resource('almacen/articulo','ArticuloController');
Route::resource('compras/proveedor','ProveedorController');
Route::resource('compras/ingreso','IngresoController');
Route::resource('ventas/venta','VentaController');
Route::resource('ventas/stock','StockController');

Route::resource('seguridad/usuario','UsuarioController');

Route::resource('/inicio','InicioController');

/*REPORTES*/
Route::resource('/reporteArticulo','PdfArtController');
Route::resource('/reporteProveedor','PdfProvController');
Route::resource('/reporteCliente','PdfClieController');
Route::resource('/reporteIngresos','PdfIngController');
Route::resource('/reporteVentas','PdfVentController');

Route::auth();

Route::get('/home', 'HomeController@index');

