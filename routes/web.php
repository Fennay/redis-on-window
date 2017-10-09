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
Route::any('selectRedis/{redisName}', [
    'as' => 'selectRedis',
    'uses' => 'IndexController@selectRedis'
]);

Route::get('selectDB/{dbIndex}', [
    'as' => 'selectDB',
    'uses' => 'IndexController@selectDB'
]);

Route::delete('deleteKey/{redisKey}',[
    'as' => 'deleteKey',
    'uses' => 'IndexController@deleteKey'
]);
Route::delete('flushDB/{dbNum}',[
    'as' => 'flushDB',
    'uses' => 'IndexController@flushDB'
]);
// 获取值
Route::get('getRedisValueByKey/{key}',[
    'as' => 'getRedisValueByKey',
    'uses' => 'IndexController@getRedisValueByKey'
]);


Route::get('/test','IndexController@test');