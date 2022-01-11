<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
class UsuarioController extends Controller
{
    public function logar(Request $request){
        $data = [];

        if ($request->isMethod("post")) {
            $login = $request->input("login");
            $password = $request->input("password");

            $credential = ['login' => $login, 'password' => $password];
            if(Auth::attempt($credential)){
                return redirect()->route("home");
            }else{
                $request->session()->flash("err","Usuário / senha inválidos");
                return redirect()->route("logar");
            }
        }

        return view("logar", $data);
    }

    public function sair(Request $request){
        Auth::logout();
        return redirect()->route("home");
    }
}
