&<?php

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


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');

Route::get('/entreprise/create', 'CompanyController@create')->name('create')->middleware('CheckRole');
Route::get('/entreprise/{id}', 'CompanyController@display')->name('display');
Route::get('/entreprise/update/{id}', 'CompanyController@update')->name('update')->middleware('CheckRole');
Route::get('/entreprise/delete/{id}', 'CompanyController@delete')->name('delete')->middleware('CheckRole');
Route::get('/entreprise/list', 'CompanyController@list')->name('list')->middleware('CheckRole');

Route::get('/collaborateur/create', 'CollabController@create')->name('create')->middleware('CheckRole');
Route::get('/collaborateur/{id}', 'CollabController@display')->name('display');
Route::get('/collaborateur/update/{id}', 'CollabController@update')->name('update')->middleware('CheckRole');
Route::get('/collaborateur/delete/{id}', 'CollabController@delete')->name('delete')->middleware('CheckRole');
Route::get('/collaborateur/list', 'CollabController@list')->name('list')->middleware('CheckRole');

Route::post('/store', 'CompanyController@store')->name('store');
Route::put('/updater/{id}', 'CompanyController@updater')->name('updater');

Route::post('/storer', 'CollabController@store')->name('store');
Route::put('/updaterco/{id}', 'CollabController@updater')->name('updater');
