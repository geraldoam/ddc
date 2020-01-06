<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('listagem-usuario', 'UserController@listUser');