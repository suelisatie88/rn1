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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/infos', 'App\Http\Controllers\InfosController@index');
Route::get('/infos/create', 'App\Http\Controllers\InfosController@create')
    ->name('create_info');
Route::post('/infos/create', 'App\Http\Controllers\InfosController@store');
