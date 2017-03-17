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

Route::get('login', ['as' => 'login', 'uses' => 'UserController@view_login']);
Route::post('login', ['as' => 'login', 'uses' => 'UserController@login']);

Route::get('donate', [ 'as' => 'donate','uses' =>'UserController@donate']);
Route::get('choice', [ 'as' => 'choice','uses' =>'UserController@choice']);
Route::post('transactionid', [ 'as' => 'transactionid','uses' =>'UserController@transactionid']);

Route::post('payment', ['as' => 'payment', 'uses' => 'UserController@payment']);
Route::get('success', ['as' => 'success', 'uses' => 'UserController@success']);
Route::get('test', ['as' => 'test', 'uses' => 'UserController@test']);

