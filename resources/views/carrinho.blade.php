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
                        @can('vendedor')
                        <td>
                            <a href="{{route('carrinho_excluir',['indice' => $indice])}}" class="btn btn-danger btn-sm">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>

                        @endcan
                        
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
                <tr>
                    <td>
                        <center>Data de Check-In: <input type="date" name="data_checkIn" class="form-control"></center>
                    </td>
                    <td>
                        <center>Data de Check-Out: <input type="date" name="data_checkOut" class="form-control"></center>
                    </td>
                </tr>
                <div>
                </div>
            </tfooter>

        </table>

        <form action="{{route('carrinho_finalizar')}}" method="post">
            @csrf
            <input type="submit" value="Finalizar campo" class="btn btn-lg btn-success">
        </form>
        <!-- <div class="col-12">
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
            </div> -->
       
    @else
        <p>Nenhum carro foi selecionado</p>
    @endif

    
    
@endsection

