@extends("layouts/main")


@section('content') 
    
    <h3>Carrinho</h3>
    @if(isset($cart) && count($cart) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th></th>
                    <th>Nome</th>
                    <th>Foto</th>
                    <th>Valor</th>
                    <th>Descrição</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cart as $indice => $item)
                    <tr>
                        <td>
                            <a href="{{route('carrinho_excluir',['indice' => $indice])}}" class="btn btn-danger btn-sm">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                        <td>{{$item->nome}}</td>
                        <td><img src="{{asset($item->foto)}}" height="50"></td>
                        <td>{{$item->valor}}</td>
                        <td>{{$item->descricao}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Nenhum carro foi selecionado</p>
    @endif
   
@endsection