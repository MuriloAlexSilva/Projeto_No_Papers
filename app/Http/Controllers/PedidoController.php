<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;
use App\Models\ItensPedido;
use App\Services\VendaService;

class PedidoController extends Controller
{
  public function finalizar(Request $request){
    $item = session('cart', []);
   
    $vendaService = new VendaService();
    $result = $vendaService->finalizarVenda($item,\Auth::user(),);

    if($result["status"] == "ok"){
      $request->session()->forget("cart");
    }

    $request->session()->flash($result["status"],$result["message"]);
    
    
    return redirect()->route("ver_carrinho");
  }

  public function historico(Request $request){
      $data  = [];
      $idusuario = \Auth::user()->id;
      $listaProduto = Pedido::where("usuario_id",$idusuario)->orderBy("data_checkIn","desc")->get();
      $data["lista"] = $listaProduto;
      return view("compra/historico",$data);
  }
  // public function detalhes(Request $request){
  //   $idPedido = $request->input("idpedido");
  //   $listaItens = ItensPedido::join("produtos","produtos_id","-", "itens_pedidos.produto_id")->where("pedido_id", $idpedido)->get();
  //   $data = [];
  //   $data["listaItens"] = $listaItens;
  //   return view("compra/historico",$data);
  // }
}


