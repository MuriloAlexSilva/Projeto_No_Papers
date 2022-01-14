@extends("layouts/main")

@section("content") 

    
    <div class="col-12">
        <h2>Selecione o carro que será feito o Check-Out:</h2>
    </div>
    <input type="text" name="deletar" id="deletar">
    <form action="/carros/leave/{id}" method="get">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-danger delete-btn">
            Check-Out locação
        </button>
    </form>


@endsection

