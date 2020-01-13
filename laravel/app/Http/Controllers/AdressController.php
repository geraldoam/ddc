<?php

namespace App\Http\Controllers;

use App\Adress;
use Illuminate\Http\Request;

class AdressController extends Controller
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
     * @param  \App\Adress  $adress
     * @return \Illuminate\Http\Response
     */
    public function show(Adress $adress)
    {
        if($adress){
            echo "<h1>Endereço do Usuário</h1> 
            <p>Rua: {$adress->street} </p> 
            <p>Número: {$adress->number} </p>
            <p>Cidade: {$adress->city} </p>
            <p>Estado: {$adress->state} </p>";
        }

        $user = $adress->user()->first();

        if($user){
            echo "<h1>Informações do Usuário</h1> 
            <p>Nome: {$user->name} </p> 
            <p>Email: {$user->email} </p>";
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Adress  $adress
     * @return \Illuminate\Http\Response
     */
    public function edit(Adress $adress)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Adress  $adress
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Adress $adress)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Adress  $adress
     * @return \Illuminate\Http\Response
     */
    public function destroy(Adress $adress)
    {
        //
    }
}
