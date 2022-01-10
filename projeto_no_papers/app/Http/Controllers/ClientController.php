<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function cadastrar(Request $request){
        $data = [];
        
        return view('cadastrar',$data);
    }
}
