<?php

namespace App\Models;

class Carro extends RModel
{
  protected $table = "carros";
  protected $fillable = ['nome','valor','foto','descricao','categoria_id'];
}
