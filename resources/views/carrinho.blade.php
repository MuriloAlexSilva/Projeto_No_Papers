@extends("layouts/main")


@section('content') 
    
    <h3>Carrinho</h3>
    @if(isset($cart) && count($cart) > 0)
    <form action="{{route('realizarPedido')}}" method="post">
        @csrf
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
        <div class="col-12">
            <center>
                <h2 class="mb-3">Faça agora o seu pedido:</h2>
            </center>
        </div>
       
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        Check-In: <input type="date" name="data_checkIn" class="form-control">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        Check-Out: <input type="date" name="data_checkOut" class="form-control">
                    </div>
                </div>
            </div>
            <div>
                <p>
                    <center><input type="submit" class="btn btn-success btn" value="Confirmar Pedido"></center>
                </p>
            </div>
        </form>
    @else
        <p>Nenhum carro foi selecionado</p>
    @endif
   
@endsection

<!-- route('###') -->