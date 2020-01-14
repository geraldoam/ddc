<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

class AuthController extends Controller
{
    public function dashboard(){

    	if(Auth::check() === true){

    		return view('admin.dashboard');

    	}

    	return redirect()->route('admin.login');
    }

    public function showLoginForm(){
    	return view('admin.formLogin');
    }


    public function login(Request $request){

    	if(!filter_var($request->email, FILTER_VALIDATE_EMAIL)){
    		return redirect()->back()->withInput()->withErrors(['Opa! Email errado. :(']);
    	}

    	$credentials = [
    		'email' => $request->email,
    		'password' => $request->password 
    	];


    	if(Auth::attempt($credentials)){

    		return redirect()->route('admin');

    	}

    	// Retorna o usuário 1 casa pra tŕas caso seja inválido e com seus inputs.
    	return redirect()->back()->withInput()->withErrors(['Opa! Algum dado está errado. :(']);

    }

    public function logout(){
    	Auth::logout();
    	return redirect()->route('admin');
    }

}
 