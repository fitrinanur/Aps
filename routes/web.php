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
Route::get('barang', 'BarangController@index');
Route::get('barang/create', 'BarangController@create');
Route::post('barang/create', 'BarangController@store');
Route::get('barang/edit/{id}', 'BarangController@edit');
Route::post('barang/edit/{id}', 'BarangController@update');
Route::get('barang/import', 'BarangController@import');
Route::post('barang/import', 'BarangController@doImport');
Route::get('barang/export', 'BarangController@export');
Route::get('barang/delete/{id}', 'BarangController@delete');

Route::get('rule', 'RuleController@index');
Route::post('rule/proses', 'RuleController@proses');
Route::get('frequent', 'FrequentController@index');

Route::get('simulasi', 'SimulasiController@index');
Route::post('simulasi/proses', 'SimulasiController@proses');