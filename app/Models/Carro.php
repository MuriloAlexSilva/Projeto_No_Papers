<?php

namespace App\Models;

class Carro extends RModel
{
  protected $table = "carros";
  protected $fillable = ['nome','valor','foto','descricao','categoria_id'];

  public function category(){
    return $this->belongsTo('App\Models\Categoria');
  }
  public function cars(){
    return $this->belongsTo('App\Models\ItensPedido');
  }
}
