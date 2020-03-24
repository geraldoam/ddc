<?php


// Index

Route::get('/', function () {
    return view('index');
});


// Auth

Auth::routes();

// Sessão ativa

Route::get('/painel', 'HomeController@index')->name('student.painel');


// Navbar link redirect

Route::get('/cursos', 'InfoController@cursos')->name('info.cursos');
Route::get('/professores', 'InfoController@professores')->name('info.professores');
Route::get('/exercicios', 'InfoController@exercicios')->name('info.exercicios');
Route::get('/contato', 'InfoController@contato')->name('info.contato');
