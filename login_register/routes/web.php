<?php


Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/painel', 'HomeController@index')->name('student.painel');

Route::get('/share', 'HomeController@index')->name('info.share');
Route::get('/team', 'HomeController@team')->name('info.team');
Route::get('/technologies', 'HomeController@index')->name('info.technologies');
