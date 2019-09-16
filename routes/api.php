<?php

use Illuminate\Http\Request;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::apiResource('partidos','PartidoController');
Route::apiResource('tipos','TipoController');
Route::apiResource('users','UserController');
Route::get('partidos','PartidoController@partidos');
Route::get('partido/{id}','PartidoController@partido');
Route::post('partidoSave','PartidoController@partidoSave');
Route::put('partidoUpdate/{partido}', 'PartidoController@partidoUpdate');
Route::delete('partidoDelete/{partido}', 'PartidoController@partidoDelete');
Route::get('partidoNivel','PartidoController@partidoNivel');
Route::post('login','UserController@login');
