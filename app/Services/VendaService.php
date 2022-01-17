<?php

namespace App\Services;
use Log;
use App\Models\User;
use App\Models\Pedido;
use App\Models\ItensPedido;
use Carbon\Carbon;
use Illuminate\Http\Request;


class VendaService{
    public function finalizarVenda($item, User $user,$checkIn,$checkOut){
        
        $date1 = Carbon::createFromFormat('Y-m-d',$checkIn);
        $date2 = Carbon::createFromFormat('Y-m-d',$checkOut);
        $valueDays = $date2->diffInDays($date1);
        
        // $temPermissaoDeVendedor = $user->hasPermissionTo('vendedor');

        try {

            // if (!$temPermissaoDeVendedor) {
            //     Log::error("ERRO:VENDA SERVICE",['message' => 'Sem permissão']);
            //     return ['status' => 'err', 'message'=> 'Sem permissão'];
            // }

            \DB::beginTransaction();
            $dtHoje = new \DateTime();
            $pedido = new Pedido();
            $pedido->usuario_id = $user->id;
            $pedido->status = 'PEN';
            $pedido->data_checkIn = $checkIn;
            $pedido->data_checkOut = $checkOut;
            $pedido->save();

            foreach($item as $p){
                $itens = new ItensPedido();
                $itens->valor_total = ($p->valor)* $valueDays;
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

