<?php
//課題４
//admin/profile/create にアクセスしたら 
//ProfileController のadd Action に割り当てる
Route::group(['prefix' => 'admin'], function() {
    Route::get('admin/profile/create', 'Admin\ProfileController@add');
});


//admin/profile/edit にアクセスしたら 
//ProfileController の edit Action に割り当てる
Route::group(['prefix' => 'admin'], function() {
    Route::get('admin/profile/egit', 'Admin\ProfileController@edit');
});