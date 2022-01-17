@extends("layouts/main")


@section('content') 
    
    <h3>Carrinho</h3>
    @if(isset($cart) && count($cart) > 0)  
        <table class="table">
            <thead>
                <tr>
                @can('vendedor')
                    <th></th>
                @endcan
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
                    <center>Data de Check-In: <input type="date" name="data_checkIn" class="form-control"></center>
                    <center>Data de Check-Out: <input type="date" name="data_checkOut" class="form-control"></center>
                    <input type="submit" value="Finalizar campo" class="btn btn-lg btn-success">
                </form>
    @else
        <p>Nenhum carro foi selecionado</p>
    @endif    
@endsection

