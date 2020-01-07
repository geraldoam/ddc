<?php


Route::get('/', function () {
    return view('welcome');
});


// Para evitar repetir o Form\\
Route::group(['namespace' => 'Form' ], function(){

	//Route::verb('uri', 'Controller@method')->name('route-name');

	// VERBO GET
	Route::get('usuarios', 'TestController@listAllUsers')->name('users.listAll');
	Route::get('usuarios/novo', 'TestController@formAddUser')->name('users.formAddUser');
	Route::get('usuarios/editar/{user}', 'TestController@formEditUser')->name('users.formEditUser');
	Route::get('usuarios/{user}', 'TestController@listUser')->name('users.listUser');


	//VERBO POST
	Route::post('usuarios/store', 'TestController@storeUser')->name('users.store');


	//VERBO PUT/PATCH
	Route::put('usuarios/edit/{user}', 'TestController@edit')->name('users.edit');


 	//VERBO DELETE
	Route::delete('usuarios/destroy/{user}', 'TestController@destroy')->name('user.destroy');

});
