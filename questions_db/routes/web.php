<?php


Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/painel', 'HomeController@index')->name('painel');
