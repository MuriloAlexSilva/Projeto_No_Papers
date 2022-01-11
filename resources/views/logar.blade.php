@extends("layouts/main")

@section("content")
    <div class="col-12">
        <h2 class="mb">Entre no Sistema</h2>
        <form action="{{route('logar')}}" method="post" >
            @csrf
            <div class="form-group">
                Login:
                <input type="text" name="login" class="form-control">
            </div>
            <div class="form-group">
                Senha:
                <input type="password" name="password" class="form-control">
            </div>
            <p>
                <center><input type="submit" value="Logar" class="btn btn-lg btn-primary"></center>
            </p>
        </form>
    </div>
@endsection