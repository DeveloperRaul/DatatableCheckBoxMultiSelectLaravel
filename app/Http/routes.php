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

/*Con Esta Ruta Se Podrá Acceder A La Lista De Productos*/
/*http://localhost/DataTableDemoKuali/public/productos*/
Route::resource('productos', 'ProductsController');