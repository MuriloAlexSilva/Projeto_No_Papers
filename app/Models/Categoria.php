<?php

namespace App\Models;

class Categoria extends RModel
{
    protected $table = "categorias";
    protected $fillable = ['categoria'];

    public function category(){
        return $this->hasMany('App\Models\Carro');
    }
}
