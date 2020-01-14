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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Criando uma espécie de painel de administração.
Route::get('/admin', 'AuthController@dashboard')->name('admin');

// Criando redirecionamento para fazer Login caso não esteja logado.
Route::get('/admin/login', 'AuthController@showLoginForm')->name('admin.login');

// Confirmando se o usuário existe.
Route::post('/admin/login/do', 'AuthController@login')->name('admin.login.do');

// Fazendo o Logout do Usuário.
Route::get('/admin/logout', 'AuthController@logout')->name('admin.logout');