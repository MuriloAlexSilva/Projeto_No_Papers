@extends("layouts/main")

@section("content") 
    <div class="col-12">
        <h2>Meus Pedidos</h2>
    </div>
    <div class="col-12">
        <table class="table table-bordered">
            <tr>
                <th>Carro</th>
                <th>Data do Check-In</th>
                <th>Data do Check-Out</th>
                <th>Valor Total</th>
            </tr>
            @foreach($lista as $ped)
                <tr>      
                    <td>{{$ped->carro_id}}</td>
                    <td>{{$ped->data_checkIn->format("d/m/Y H:i")}}</td>
                    <td>{{$ped->data_checkOut->format("d/m/Y H:i")}}</td>
                    <td>{{$ped->valor_total}}</td>
                </tr>          
            @endforeach
        </table>
    </div>
@endsection