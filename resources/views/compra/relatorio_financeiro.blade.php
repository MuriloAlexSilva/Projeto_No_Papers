@extends("layouts/main")

@section("content") 

    
        <div class="col-12">
            <h2>Relatório Financeiro</h2>
        </div>
        <div class="col-12">

                <div>
                    Escolha a consulta desejada:
                    <p>
                        <select name="cliente">
                            <option value="todos">Todos Clientes</option>
                            <option value="clienteUnico">Único Cliente</option>
                        </select>
                    </p>
                    <p>Se selecionar o Único Cliente, digite o nome? </p>
                    <p>
                      <input type="text" name="user" id="">
                    </p>
                    <p>Data Inicial da consulta: <input type="date" name="data_inicial" ><br></p>
                    <p>Data Final da consulta: <input type="date" name="data_final" ><br></p>

                    <form action="{{route('relatorioFinanceiropdf')}}" method="post">
                        @csrf
                        <input type="submit" value="Finalizar campo" class="btn btn-lg btn-success">
                     </form>  
                </div>
                 
        </div>

@endsection

