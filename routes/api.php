<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('publicacion', 'PublicacionController@index');
Route::get('publicacion/{id}', 'PublicacionController@show');
Route::post('publicacion', 'PublicacionController@store');
Route::put('publicacion/{id}', 'PublicacionController@update');
Route::delete('publicacion/{id}', 'PublicacionController@delete');

Route::get('usuario', 'UsuarioController@index');
Route::get('usuario/{id}', 'UsuarioController@show');
Route::post('usuario', 'UsuarioController@store');
Route::put('usuario/{id}', 'UsuarioController@update');
Route::delete('usuario/{id}', 'UsuarioController@delete');