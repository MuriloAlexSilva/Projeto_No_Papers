<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Permission;
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
        $permission = new Permission();
        $permission->permission_id = 2;
        $permission->model_type = 'App\Models\User';
        $permission->model_id = ;
        return ['status' => 'ok','message'=> 'Vendedor cadastrado com sucesso!'];

        $message = $result["message"];
        $status = $result["status"];
        $request->session()->flash($status,$message);
        return redirect()->route('cadastrar')->givePermissionTo('vendedor');
    }
}
