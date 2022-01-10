<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class ClientController extends Controller
{
    public function cadastrar(Request $request){
        $data = [];
        
        return view('cadastrar',$data);
    }

    public function cadastrar_cliente(Request $request){
        $values = $request->all();
        $usuario = new Usuario();
        $usuario->nome = $request->input('cpf','');//tem que continuar add os demais campos, parei na aula 13 13:07
        return redirect()->route('cadastrar');
    }
}
