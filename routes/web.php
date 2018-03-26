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

Route::get('/', 'MainController@index')->name('main');

Route::match(['get', 'post'],'/Processors/{id}', [
    'uses' => 'ProcessorsController@index',
    'as' => 'Processors'
]);
Route::match(['get', 'post'],'/OneProcessor/{id}', [
    'uses' => 'ProcessorsController@show',
    'as' => 'OneProcessor'
]);

Route::match(['get', 'post'],'/Video/{id}', [
    'uses' => 'VideoController@index',
    'as' => 'Video'
]);
Route::match(['get', 'post'],'/Motherboards/{id}', [
    'uses' => 'MotherboardController@index',
    'as' => 'Motherboards'
]);
Route::match(['get', 'post'],'/Hard/{id}', [
    'uses' => 'HardController@index',
    'as' => 'Hard'
]);