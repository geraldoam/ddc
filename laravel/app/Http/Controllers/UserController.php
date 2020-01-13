<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::where('id', $id)->first();

        // Lembre-se que isso é para testes, o cenário ideal é mandar uma visão.
        if($user){
            echo "<h1>Informações do Usuário</h1> 
            <p>Nome: {$user->name} </p> 
            <p>Email: {$user->email} </p>";
        }

        $adress = $user->adress()->first();

        if($adress){
            echo "<h1>Endereço do Usuário</h1> 
            <p>Rua: {$adress->street} </p> 
            <p>Número: {$adress->number} </p>
            <p>Cidade: {$adress->city} </p>
            <p>Estado: {$adress->state} </p>";
        }

        $posts = $user->posts()->get();

        if($posts){

            echo "<h1>Artigos do Usuário</h1>";
            foreach($posts as $post){

                echo "<p>Posts: {$post->title} </p>
                <p>Conteúdo: {$post->content} </p>
                <p>ID: {$post->id} </p>
                <br>
                <br>";    
            }
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
