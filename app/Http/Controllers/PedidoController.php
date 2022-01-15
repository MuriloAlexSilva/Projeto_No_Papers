<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Pedido;
use App\Models\ItensPedido;
use App\Services\VendaService;
use PDF;




class PedidoController extends Controller
{
  public function finalizar(Request $request){
    $item = session('cart', []);
   
    $vendaService = new VendaService();
    $result = $vendaService->finalizarVenda($item,\Auth::user());

    if($result["status"] == "ok"){
      $request->session()->forget("cart");
    }

    $request->session()->flash($result["status"],$result["message"]);
    
    
    return redirect()->route("ver_carrinho");
  }

  public function historico(Request $request){

    $data  = [];
    $idusuario = \Auth::user()->id;
  
    $listaPedido = Pedido::where("usuario_id",$idusuario)->orderBy("data_checkIn","desc")->get();
    $data["lista"] = $listaPedido;
  
    return view("compra/historico",$data);
  }

  public function relatorioFinanceiropdf(Request $request){


    $pedidos = $request;
    $pedidos = ItensPedido::all();
         

    
  //  dd($pedidos); 
    $pdf = PDF::loadView('compra/pdf',compact('pedidos'))->setOptions(['defaultFont' => 'sans-serif']);
    return $pdf->setPaper('a4')->stream('Todos Pedidos');

  }
  public function relatorioFinanceiro(){
    return view('compra/relatorio_financeiro');
  }
  public function fazercheckOut(){

    $data=ItensPedido::all();
    return view('compra/check_out',['checkOut'=>$data]);
    
  }


  public function destroy($id){

    ItensPedido::findOrFail($id)->delete();
    return redirect('/compras/checkout')->with('msg','Carro cancelado com sucesso!');

}

  // public function leaveCar(Request $request){
  //   $id = $request->input('deletar');
 
  //   $pedidos = ItensPedido::all();
  //   $pedidos = auth()->user();  
  //   $pedidos->detach($id);
  //   return redirect('/');
  // }

}



