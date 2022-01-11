
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <title>No Paper Locadora de Veiculo</title>
  
</head>
<body>
    <header>
        <nav class="navbar navbar-light navbar-expand-md bg-light pl-5 pr-5 mb-5">
            <a href="#" class="navbar-brand">No Papers - Locadora de Veiculos</a>
            <div class="collapse navbar-collapse">
                <div class="navbar-nav">
                    <a href="{{route('home')}}" class="nav-link">Home</a>
                    <a href="{{route('categoria')}}" class="nav-link">Categoria de Carros</a>
                    <a href="{{route('cadastrar')}}" class="nav-link">Cadastre-se</a>
                    @if(!Auth::user())
                        <a href="{{route('logar')}}" class="nav-link">Entrar</a>
                    @else
                        <a href="{{route('sair')}}" class="nav-link">Logout</a>
                    @endif
                </div>
            </div>
            <a href="{{route('ver_carrinho')}}" class="btn btn-sm"><i class="fa fa-shopping-cart"></i></a>
        </nav>
    </header>
    <div class="container">
        <div class="row">
            @if(Auth::user())
                <div class="col-12">
                    <p class="text-right">Seja bem vindo, {{Auth::user()->nomeCompleto}},</p>
                    <a href="{{route('sair')}}">sair</a>
                </div>
            @endif

            @if($message = Session::get("err"))
                <div class="col-12">
                    <div class="alert alert-danger">{{$message}}</div>
                </div>
            @endif
            @if($message = Session::get("ok"))
                <div class="col-12">
                    <div class="alert alert-success">{{$message}}</div>
                </div>
            @endif
            @yield('content')
        </div>
    </div>
</body>
</html>