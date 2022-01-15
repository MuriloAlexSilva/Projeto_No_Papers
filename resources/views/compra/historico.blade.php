@extends("layouts/main")

@section("content") 
    <div class="col-12">
        <h2>Minhas Compras</h2>
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
         
                    <!-- TEria que mostrar a tela de check in para conseguir calcular a qtdd de dias no controller -->
                    <td>{{$ped->carro_id}}</td>
                    <td>{{$ped->data_checkIn->format("d/m/Y H:i")}}</td>
                    <td>{{$ped->data_checkOut->format("d/m/Y H:i")}}</td>
                    <td>{{$ped->valor_total}}</td>

                </tr>
            
            @endforeach

            </table>
    </div>

    <div class="modal fade" id="modalcompra">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Detalhes da Compra</h5>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
@endsection