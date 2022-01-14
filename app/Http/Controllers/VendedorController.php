<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Permission;
use App\Services\ClienteService;
use Illuminate\Support\Facades\Hash;


class VendedorController extends Controller
{
    public function cadastrar(Request $request){
        $data = [];
        return view('cadastrar',$data);
    }

    public function cadastrarVendedor(Request $request){

        User::create([
            'name' => $request->input('nome',''),
            'email' => $request->input('email',''),
            'password' => Hash::make($request->input('password','')),
            'telefone' => $request->input('telefone',''),
            'cpf' => $request->input('cpf',''),
        ])->givePermissionTo($permission = "vendedor");

        $message = 'Sucesso';
        $status = 'ok';
        $request->session()->flash($status,$message);
        return redirect()->route('cadastrar');
    }
}
