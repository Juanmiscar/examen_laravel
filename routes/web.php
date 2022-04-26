<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/add', 'App\Http\Controllers\CasalController@add');
Route::post('/addCasals', 'App\Http\Controllers\CasalController@addCasals')->name('addCasals');
Route::get('/editar','App\Http\Controllers\CasalController@editar')->name('editar');
// Route::get('/editar', function ($id) {
//     return "Details of the user id: {$id}";
//   });
Route::get('/eliminar', 'App\Http\Controllers\CasalController@eliminar');
Route::get('/', 'App\Http\Controllers\CasalController@inicio');

