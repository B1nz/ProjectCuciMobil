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

//route CRUD

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cucimobil', 'CuciMobilController@index');

Route::get('/cucimobil/tambah', 'CuciMobilController@tambah');

Route::post('/cucimobil/store', 'CuciMobilController@store');

Route::get('/cucimobil/edit/{id}', 'CuciMobilController@edit');

Route::post('/cucimobil/update', 'CuciMobilController@update');

Route::get('/cucimobil/hapus/{id}', 'CuciMobilController@hapus');

Route::get('/cucimobil/cari','CuciMobilController@cari');

?>