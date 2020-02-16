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

Route::get('/curso-tecnico', 'InfoController@cursotecnico')->name('info.curso-tecnico');
Route::get('/ensino-regular', 'InfoController@ensinoregular')->name('info.ensino-regular');
Route::get('/professores', 'InfoController@professores')->name('info.professores');
Route::get('/exercicios', 'InfoController@exercicios')->name('info.exercicios');
Route::get('/contato', 'InfoController@contato')->name('info.contato');

Route::get('/teste', 'InfoController@teste')->name('layout.layout');
Route::get('/teste2', 'InfoController@teste2')->name('layout.layout2');