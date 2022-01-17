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
            \DB::beginTransaction();
            $user->save();
            \DB::commit();
                return ['status' => 'ok','message'=> 'Usuário cadastrado com sucesso!'];
        } catch (\Exception $e) {
            \Log::error("Erro",['file' => 'ClienteService.salvarUsuario']);
            \DB::rollback();
                return ['status' => 'err','message'=> 'Não pode ser cadastrado o usuário!'];
        }
    }

}
