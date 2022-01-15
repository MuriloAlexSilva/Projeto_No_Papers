<?php

namespace App\Models;


class Pedido extends RModel
{
    protected $table = "pedidos";
    protected $dates = ['data_checkIn','data_checkOut'];
    protected $fillable = ['data_checkIn','data_checkOut','usuario_id','status'];


    
}
