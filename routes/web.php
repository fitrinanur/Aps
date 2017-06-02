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

Route::get('/','Auth\LoginController@showLoginForm');
Auth::routes();
Route::get('home', 'HomeController@index')->name('home');
Route::get('stok', 'StokController@index');
Route::get('stok/create', 'StokController@create');
Route::post('stok/create', 'StokController@store');
Route::get('stok/edit/{id}', 'StokController@edit');
Route::post('stok/edit/{id}', 'StokController@update');
Route::get('stok/import', 'StokController@import');
Route::post('stok/import', 'StokController@doImport');
Route::get('stok/delete/{id}', 'StokController@delete');

Route::get('barang', 'BarangController@index');
Route::get('barang/create', 'BarangController@create');
Route::post('barang/create', 'BarangController@store');
Route::get('barang/edit/{id}', 'BarangController@edit');
Route::post('barang/edit/{id}', 'BarangController@update');
Route::get('barang/import', 'BarangController@import');
Route::post('barang/import', 'BarangController@doImport');
Route::get('barang/delete/{id}', 'BarangController@delete');

Route::get('rule', 'RuleController@index');
Route::get('analisa', 'AnalisaController@index');
Route::post('analisa', 'AnalisaController@proses');

Route::get('simulasi', 'SimulasiController@index');
Route::post('simulasi', 'SimulasiController@proses');
