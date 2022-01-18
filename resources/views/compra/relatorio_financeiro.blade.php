@extends("layouts/main")

@section("content") 
        <p>
            <center>
                <div class="col-12">
                    <h2>Relatório Financeiro</h2>
                </div>
            </center>
        </p>
        <center>
            <div class="col-12">
                    <div>
            
                        <form action="{{route('relatorioFinanceiropdf')}}" method="post">
                            @csrf
                            <p>
                            Escolha a consulta desejada:
                                <select name="cliente">
                                    <option value="todos">Todos Clientes</option>
                                    <option value="clienteUnico">Único Cliente</option>
                                </select>
                            </p>
                            <p>Se selecionar o Único Cliente, digite o nome?  <input type="text" name="user"></p>
                            <p>Data Inicial da consulta: <input type="date" name="data_inicial" ></p>
                            <p>Data Final da consulta: <input type="date" name="data_final" ></p>
                            <center><input type="submit" value="Finalizar campo" class="btn btn-sm btn-success"></center>
                         </form>
                    </div>
            </div>
        </center>
@endsection

