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

Route::get('/', [
    'as' => 'default.index',
    'uses' => 'IndexController@index'
]);


Route::get('selectDB/{dbIndex}', [
    'as' => 'selectDB',
    'uses' => 'IndexController@selectDB'
]);

Route::delete('deleteKey/{redisKey}',[
    'as' => 'deleteKey',
    'uses' => 'IndexController@deleteKey'
]);

Route::get('/test','IndexController@test');