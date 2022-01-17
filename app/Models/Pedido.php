<?php

namespace App\Models;


class Pedido extends RModel
{
    protected $table = "pedidos";
    protected $dates = ['data_checkIn','data_checkOut'];
    protected $fillable = ['data_checkIn','data_checkOut','usuario_id','status'];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    public function pedidos(){
        return $this->hasMany('App\Models\ItensPedido');
    }
    
}
