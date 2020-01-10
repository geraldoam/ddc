<?php


Route::get('/', 'PostController@showForm');
Route::post('/debug', 'PostController@debug')->name('debug');


Route::resource('usuarios', 'Form\\TestController')->names('user')->parameters(['usuarios' => 'user']);