<?php

namespace App\Models;


class ItensPedido extends RModel
{
    protected $table = "itens_pedidos";
    protected $fillable = ['valor_total','carro_id','pedido_id'];

    public function pedidos(){
        return $this->belongsTo('App\Models\Pedido','pedido_id','id');
    }
    public function cars(){
        return $this->hasMany('App\Models\Carro', 'carro_id','id');//verificar o codigo aqui
    }
}
