<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Services\ClienteService;

class ClientController extends Controller
{
    public function cadastrar(Request $request){
        $data = [];
        return view('cadastrar',$data);
    }

    public function cadastrarCliente(Request $request){
        $values = $request->all();
        $usuario = new Usuario();
        $usuario->nomeCompleto = $request->input('nome','');
        $usuario->telefone = $request->input('telefone','');
        $usuario->email = $request->input('email','');
        $usuario->cpf = $request->input('cpf','');
        $usuario->data_nascimento = $request->input('data_nascimento','');
        $usuario->login = $request->input('login','');
        $senha = $request->input('password','');
        $clienteService = new ClienteService();
        $result = $clienteService->salvarUsuario($usuario)->givePermissionTo('vendedor');
        $message = $result["message"];
        $status = $result["status"];
        $request->session()->flash($status,$message);
        return redirect()->route('cadastrar');
    }
}
