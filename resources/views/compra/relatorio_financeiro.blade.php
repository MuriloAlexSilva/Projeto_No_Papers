@extends("layouts/main")

@section("content") 

    
        <div class="col-12">
            <h2>Relatório Financeiro</h2>
        </div>
        <div class="col-12">
                <div>
                    Escolha a consulta desejada:
                    <form action="{{route('relatorioFinanceiropdf')}}" method="post">
                        @csrf
                        <p>
                            <select name="cliente">
                                <option value="todos">Todos Clientes</option>
                                <option value="clienteUnico">Único Cliente</option>
                            </select>
                        </p>
                        <p>Se selecionar o Único Cliente, digite o nome? </p>
                        <p><input type="text" name="user"></p>
                        <p>Data Inicial da consulta: <input type="date" name="data_inicial" ></p>
                        <p>Data Final da consulta: <input type="date" name="data_final" ></p>
                        <input type="submit" value="Finalizar campo" class="btn btn-lg btn-success">
                     </form>  
                </div>
        </div>
@endsection

