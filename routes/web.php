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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/pertanyaan', 'pertanyaanController@index');

Route::post('/pertanyaan','pertanyaanController@store');

Route::get('/pertanyaan/create', 'pertanyaanController@create');

Route::get('/jawaban/create/{id}', 'JawabanController@create');
Route::get('/jawaban', 'JawabanController@index');
Route::get('/pertanyaan/{id}', 'JawabanController@getindex');
Route::post('/jawaban/{id}', 'JawabanController@store');



Route::put('/pertanyaan/{id}', 'pertanyaanController@update');

Route::get('/pertanyaan/{id}/edit','pertanyaanController@edit');

Route::delete('/pertanyaan/{id}','pertanyaanController@destroy');