@extends("layouts/main")

@section("content") 

    
    <div class="col-12">
        <h2>Selecione o carro que será feito o Check-Out:</h2>
    </div>
    <table class="table table-success table-striped">
        <tr>
            <td>Id</td>
            <td>Carro</td>
            <td>Pedido</td>
            <td>Check-Out</td>
        </tr>
        @foreach($checkOut as $item)
            <tr>
                <td>{{$item['id']}}</td>
                <td>{{$item['carro_id']}}</td>
                <td>{{$item['pedido_id']}}</td>
                <td><a href={{"delete/".$item['id']}}>Check-Out</a></td>
            </tr>
        @endforeach
    </table>
@endsection

