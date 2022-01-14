@if(isset($lista))
    <div class="row">
        @foreach($lista as $car)
            <div class="col-3 mb-3">
                <div class="card">
                    <img src="{{asset($car->foto)}}" alt="" class="card-img-top">
                    <center>
                        <div class="card-body">
                            <h6 class="card-title">{{$car->nome}} - R$ {{$car->valor}}</h6>
                            <p><a href="{{route('adicionar_carrinho',['idcarro' => $car->id])}}" class="btn btn-sm btn-secondary">Reservar</a></p> 
                        </div>
                    </center>
                </div>
            </div>
        @endforeach
    </div>
@endif



