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

use App\Http\Controllers;

Route::get('login', [ 'as' => 'login', 'uses' => 'AutenticacionController@index']);
Route::post('/login', 'AutenticacionController@login');

Route::middleware(['auth'])->group(function()
{
    Route::get('/', function () { return view('aplicacion.portada.index'); });

    Route::get('/cargar', function () { return view('aplicacion.cargar.index'); });

    Route::get('/logout', 'AutenticacionController@logout');
});