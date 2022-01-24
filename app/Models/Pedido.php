<?php

namespace App\Models;


class Pedido extends RModel
{
    protected $table = "pedidos";
    protected $dates = ['data_checkIn','data_checkOut'];
    protected $fillable = ['data_checkIn','data_checkOut','user_id','status'];

    public function user(){
        return $this->belongsTo('App\Models\User','user_id','id');//Realizei a alteraçao aqui
    }
    public function pedidos(){
        return $this->hasMany('App\Models\ItensPedido');
    }
    
}
