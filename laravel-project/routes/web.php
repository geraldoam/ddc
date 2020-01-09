<?php


Route::get('/', function () {
    return view('welcome');
});


Route::resource('usuarios', 'Form\\TestController')->names('user')->parameters(['usuarios' => 'user']);