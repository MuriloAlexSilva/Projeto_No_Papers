@extends("layouts/main")


@section('content') 
    
    <p>
        <center>
            <h3>Carrinho de Compras</h3>
        </center>
    </p>
    @if(isset($cart) && count($cart) > 0)  
        <table class="table" id="table_custom">
            <thead>
                <tr>
                    <th>Excluir</th>
                    <th>Nome</th>
                    <th>Foto</th>
                    <th>Valor da diaria</th>
                    <th>Descrição</th>
                </tr>
            </thead>
            <tbody>
                @php $total = 0; @endphp
                @foreach($cart as $indice => $item)
                    <tr>                  
                        <td>
                            <a href="{{route('carrinho_excluir',['indice' => $indice])}}" class="btn btn-danger btn-sm">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>                        
                        <td>{{$item->nome}}</td>
                        <td><img src="{{asset($item->foto)}}" height="50"></td>
                        <td>R$ {{$item->valor}}</td>                      
                        <td>{{$item->descricao}}</td>                       
                    </tr>
                    @php $total += $item->valor; @endphp
                @endforeach
            </tbody>
            <tfooter>
                <tr>
                    <td colspan="5">
                        Total do carrinho por Diária: R$ {{$total}},00
                    </td>
                </tr>
            </tfooter>                  
        </table>         
                <form action="{{route('carrinho_finalizar')}}" method="post">
                    @csrf
                    <p>
                        <center>Data de Check-In: <input type="date" name="data_checkIn" class="form-control"></center>
                    </p>
                    <p>
                        <center>Data de Check-Out: <input type="date" name="data_checkOut" class="form-control"></center>
                    </p>
                    <p><center><input type="submit" value="Finalizar campo" class="btn btn-lg btn-success"></center></p>
                </form>
    @else
        <p>Nenhum carro foi selecionado</p>
    @endif    
@endsection

