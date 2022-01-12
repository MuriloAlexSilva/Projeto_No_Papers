<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarroController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\VendedorController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::match(['get','post'],'/',[CarroController::class,'index'])->name('home');
Route::match(['get','post'],'/categoria',[CarroController::class,'categoria'])->name('categoria');
Route::match(['get','post'],'/{idcategoria}/categoria',[CarroController::class,'categoria'])->name('categoria_por_id');
Route::match(['get','post'],'/cadastrar',[ClientController::class,'cadastrar'])->name('cadastrar');
Route::match(['get','post'],'/realizarPedido',[PedidoController::class,'realizarPedido'])->name('realizarPedido');
Route::match(['get','post'],'/cadastrarvendedor',[VendedorController::class,'cadastrarVendedor'])->name('cadastrar_vendedor');
Route::match(['get','post'],'/{idcarro}/carrinho/adicionar',[CarroController::class,'adicionarCarrinho'])->name('adicionar_carrinho');
Route::match(['get','post'],'/carrinho',[CarroController::class,'verCarrinho'])->name('ver_carrinho')->middleware('auth');
Route::match(['get','post'],'/compras/historico',[CarroController::class,'historico'])->name('compra_historico')->middleware('auth');
Route::match(['get','post'],'/{indice}/excluircarrinho',[CarroController::class,'excluirCarrinho'])->name('carrinho_excluir');
// Route::match(['get','post'],'/logar',[UsuarioController::class,'logar'])->name('logar');
Route::post('/compras/meuspedidos',[CarroController::class,'meusPedidos'])->name('meusPedidos');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('/dashboard');
})->name('dashboard');
