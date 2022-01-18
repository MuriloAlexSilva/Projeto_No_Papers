@if(isset($lista))
    <div class="row">
        @foreach($lista as $car)
            <!-- <div class="col-3 " > -->
                <div class="card mb-3 col-3" style="padding:5px;">
                    <img src="{{asset($car->foto)}}" alt="" class="card-img-top">
                    <center>
                        <div class="card-body" >
                            <h4 class="card-title">{{$car->nome}} </h4>
                            <h5 class="card-title">R$ {{$car->valor}} </h5>
                            <h6 class="card-title">{{$car->descricao}} </h6>
                            <p><a href="{{route('adicionar_carrinho',['idcarro' => $car->id])}}" style="color:orange;" class="btn btn-bg btn-secondary">Reservar</a></p> 
                        </div>
                    </center>
                </div>
            <!-- </div> -->
        @endforeach
    </div>
@endif



