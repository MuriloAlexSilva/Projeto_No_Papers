<?php

namespace App\Models;


class ItensPedido extends RModel
{
    protected $table = "itens_pedidos";
    protected $fillable = ['valor_total','carro_id','pedido_id'];

    public function pedidos(){
        return $this->belongsTo('App\Models\Pedido');
    }
    public function cars(){
        return $this->hasMany('App\Models\Carro');
    }
}
