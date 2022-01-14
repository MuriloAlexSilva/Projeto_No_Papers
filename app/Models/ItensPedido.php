<?php

namespace App\Models;


class ItensPedido extends RModel
{
    protected $table = "itens_pedidos";
    protected $fillable = ['valor_total','carro_id','pedido_id'];

  
}
