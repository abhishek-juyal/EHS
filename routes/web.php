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
    return view('info.create');
});

Route::post('/info', 'App\Http\Controllers\InformationController@store')->name('info');
Route::get('/info', 'App\Http\Controllers\InformationController@index')->name('info');
Route::get('/list', 'App\Http\Controllers\InformationController@list')->name('list');
Route::get('/edit/{id}', 'App\Http\Controllers\InformationController@edit')->name('edit');
Route::post('/update/{id}', 'App\Http\Controllers\InformationController@update')->name('update');
Route::delete('/destroy/{id}', 'App\Http\Controllers\InformationController@destroy')->name('destroy');