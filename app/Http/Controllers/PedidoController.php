<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;
class PedidoController extends Controller
{
      //Parei aqui
        public function realizarPedido(Request $request){
        // $values = $request->all();
        $data = [];
        $pedido = new Pedido();
        // $pedido->valor_total = $request->;
        $pedido->data_checkIn = $request->input('data_checkIn','');
        $pedido->data_checkOut = $request->input('data_checkOut','');
        $pedido = save();        
        $data["listaPedido"] = $listaCarros;
        return view("meuspedidos",$data);
    }
}


