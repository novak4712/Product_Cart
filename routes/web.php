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

Route::get('/Processors/{id}', [
    'uses' => 'ProcessorsController@index',
    'as' => 'Processors'
]);
Route::get('/OneItem/{id}', [
    'uses' => 'MainController@show',
    'as' => 'OneItem'
]);

Route::get('/Video/{id}', [
    'uses' => 'VideoController@index',
    'as' => 'Video'
]);
Route::get('/Motherboards/{id}', [
    'uses' => 'MotherboardController@index',
    'as' => 'Motherboards'
]);
Route::get('/Hard/{id}', [
    'uses' => 'HardController@index',
    'as' => 'Hard'
]);

Route::Post('/search', [
    'uses' => 'MainController@search',
    'as' => 'search'
]);
Route::Post('/checkProcessor', [
    'uses' => 'CheckProcessorController@check',
    'as' => 'checkProcessor'
]);
Route::Post('/checkMotherboard', [
    'uses' => 'CheckMotherboardController@check',
    'as' => 'checkMotherboard'
]);
Route::Post('/checkVideo', [
    'uses' => 'CheckVideoController@check',
    'as' => 'checkVideo'
]);
Route::Post('/checkHard', [
    'uses' => 'CheckHardController@check',
    'as' => 'checkHard'
]);