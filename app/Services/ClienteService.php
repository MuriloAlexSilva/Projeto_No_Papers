<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Models\User;
use Log;

class ClienteService {
    public function salvarUsuario(User $user){
        try {
            $dbUsuario = User::where("cpf", $user->cpf)->first();
            if($dbUsuario){
                return ['status' => 'err','message'=> 'Login e/ou CPF já cadastrados!'];
            }
            //O tratamento do DB:: seria para se houver erro, cancela a transacao
            \DB::beginTransaction();//Iniciar uma transacao
            $user->save();
            \DB::commit();//Confirmando a transacao
            return ['status' => 'ok','message'=> 'Usuário cadastrado com sucesso!'];
        } catch (\Exception $e) {
            \Log::error("Erro",['file' => 'ClienteService.salvarUsuario']);
            \DB::rollback();//Cancelar a transacao
            return ['status' => 'err','message'=> 'Não pode ser cadastrado o usuário!'];
        }
    }

}
