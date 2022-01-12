<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Services\ClienteService;

class VendedorController extends Controller
{
        public function cadastrar(Request $request){
            $data = [];
            
            return view('cadastrar',$data);
        }
        
        public function cadastrarVendedor(Request $request){
        $values = $request->all();

        $vendedor = new User();
        $vendedor->name = $request->input('nome','');
        $vendedor->telefone = $request->input('telefone','');
        $vendedor->email = $request->input('email','');
        $vendedor->cpf = $request->input('cpf','');
        $senha = $request->input('password');
        $vendedor->password = \Hash::make($senha);//Comando para criptografar a senha

        $vendedor->save();
        return ['status' => 'ok','message'=> 'Usuário cadastrado com sucesso!'];

        $message = $result["message"];
        $status = $result["status"];
        $request->session()->flash($status,$message);
        return redirect()->route('cadastrar');
    }
}
