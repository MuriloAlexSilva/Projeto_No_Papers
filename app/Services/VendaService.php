<?php

namespace App\Services;
use Log;
use App\Models\User;
use App\Models\Pedido;
use App\Models\ItensPedido;
use Carbon\Carbon;
use Illuminate\Http\Request;


class VendaService{
    public function finalizarVenda($item = [], User $user){
        
        // $date1 = Carbon::createFromFormat('Y-m-d',$checkIn);
        // $date2 = Carbon::createFromFormat('Y-m-d',$checkOut);
        // $valueDays = $date2->diffInDays($date1);

        // $temPermissaoDeVendedor = $user->hasPermissionTo('vendedor');

        try {

        //     if (!$temPermissaoDeVendedor) {
        //         Log::error("ERRO:VENDA SERVICE",['message' => 'Sem permissão']);
        //         return ['status' => 'err', 'message'=> 'Sem permissão'];
        //     }

            \DB::beginTransaction();
            $dtHoje = new \DateTime();
            $pedido = new Pedido();
            $pedido->usuario_id = $user->id;
            $pedido->status = 'PEN';
            $pedido->data_checkIn = $dtHoje;//Tem que arrumar a data para receber o input
            $pedido->data_checkOut = $dtHoje;///Tem que arrumar a data para receber o input
            $pedido->save();

            foreach($item as $p){
                $itens = new ItensPedido();
                $itens->valor_total = $p->valor;
                $itens->carro_id = $p->id;
                $itens->pedido_id = $pedido->id;
                
                $itens->save();
            }

            \DB::commit();
            return ['status' => 'ok','message' => 'Venda finalizada com sucesso'];
        } catch (\Exception $e) {
            \DB::rollback();
            Log::error("ERRO:VENDA SERVICE",['message' => $e->getMessage()]);
            return ['status' => 'err', 'message'=> 'Venda não pode ser finalizada'];
        }
    }
}
//   $dataItem = [];
    //   $dataItem = new ItensPedido;
    //   $valorItem = $request($values[$cart->valor]);
    //   $dataItem->valor_total = $valorItem;
    //   $dataItem = save();

    //   $data = [];
    //   $pedido = new Pedido();        
    //   $pedido->data_checkIn = $request->input('data_checkIn');
    //   $pedido->data_checkOut = $request->input('data_checkOut');
    //   $date1 = Carbon::createFromFormat('Y-m-d',$request->input('data_checkIn'));
    //   $date2 = Carbon::createFromFormat('Y-m-d',$request->input('data_checkOut'));
    //   $valueDays = $date2->diffInDays($date1);
      
    //   $db = new PDO('mysql:host=127.0.0.1;dbname=nopapersdb','root');
    //   $dbValue = $db->prepare('SELECT `valor_total` FROM `itens_pedidos`');
    //   $dbValue->bindParam(':valor_total',$valor_total,PDO::PARAM_STR);
    //   $dbValue->execute();
    //   $valor = $dbValue->fetchAll(PDO::FETCH_ASSOC);
    //   $pedido->valor_total = $valueDays * $valorItem;
    //   $pedido = save();        
    //   $data["listaPedido"] = $pedido;

