<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adress extends Model
{
    protected $table = 'adresses';

    public function user(){
    	// Endereço pegando do APP. Chave estrangeira 'user', qual a coluna no banco de dados que se relaciona com usuário. Qual é a tabela dentro de 'user' que irá fazer essa relação.
    	return $this->beLongsTo(User::class, 'user', 'id');
    }
}
