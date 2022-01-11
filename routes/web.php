<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarroController;
use App\Http\Controllers\ClientController;
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
Route::match(['get','post'],'/cliente/cadastrar',[ClientController::class,'cadastrarCliente'])->name('cadastrar_cliente');
Route::match(['get','post'],'/{idcarro}/carrinho/adicionar',[CarroController::class,'adicionarCarrinho'])->name('adicionar_carrinho');
Route::match(['get','post'],'/carrinho',[CarroController::class,'verCarrinho'])->name('ver_carrinho');
Route::match(['get','post'],'/{indice}/excluircarrinho',[CarroController::class,'excluirCarrinho'])->name('carrinho_excluir');