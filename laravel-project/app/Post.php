<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Str;

class Post extends Model
{
    protected $table = 'posts';

    // Regra de Negócio.
    // Adiciona segurança a aplicação.
    public function setTitleAttribute($value){

    	$this->attributes['title'] = $value;
    	$this->attributes['slug'] = str::slug($value);

    }
}
