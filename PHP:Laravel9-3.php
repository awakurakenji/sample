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

Route::group(['prefix' => 'admin'], function() {
    Route::get('news/create', 'Admin\NewsController@add');
});



//課題3
//「http://XXXXXX.jp/XXX というアクセスが来たときに、
//AAAControllerのbbb　というAction に渡すRoutingの設定」
Route::get('XXX/', 'Admin\AAAController@bbb');