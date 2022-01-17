<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carro;
use App\Models\Categoria;
use App\Models\Pedido;

class CarroController extends Controller
{
    public function index(Request $request){
        $data = [];
        $listaCarros = Carro::all();
        $data["lista"] = $listaCarros;
        return view("home",$data);
    }

    public function categoria($idcategoria = 0, Request $request){
        $data = [];
        $listaCategorias = Categoria::all();
        $queryCarro = Carro::limit(10);
        if ($idcategoria != 0) {
            $queryCarro->where("categoria_id",$idcategoria);
        }
        $listaCarros = $queryCarro->get();
        $data["lista"] = $listaCarros;
        $data["listaCategoria"] = $listaCategorias;
        $data["idcategoria"] = $idcategoria;
        return view("categoria",$data);
    }

    public function adicionarCarrinho($idCarro = 0,Request $request){
        $car = Carro::find($idCarro);
        if ($car) {
            $carrinho = session('cart', []);
            array_push($carrinho,$car);
            session(['cart' => $carrinho]);
        }
        return redirect()->route('home');
    }
    
    public function verCarrinho(Request $request){
        $carrinho = session('cart',[]);
        $data = ['cart'=>$carrinho];
        return view('carrinho', $data);
    }

    public function excluirCarrinho($indice,Request $request){
        $carrinho = session('cart', []);
        if(isset($carrinho[$indice])){
            unset($carrinho[$indice]);
        };
        session(["cart" => $carrinho]);
        return redirect()->route('ver_carrinho');
    }   
}
