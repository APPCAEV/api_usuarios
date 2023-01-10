<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/usuarios_lectores', function () {
    return "AQui se devolveran los usuarios";
});*/

//Route::get('/usuarios_lectores', "aqui va controlador y metodo")

Route::get('/usuarios_lectores',"App\Http\Controllers\MysqlController@obtenerTodosUsuarios");

//Route::get('/usuarios_lectores',"App\Http\Controllers\MysqlController@obtenerTodosUsuarios");
//Route::get('user', )->name('user');