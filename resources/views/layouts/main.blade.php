
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
                    @guest
                        <a href="/register" class="nav-link">Cadastre-se</a>
                        <a href="/login" class="nav-link">Entrar</a>  
                    @endguest
                    @auth
                        <form action="/logout" method="post">
                            @csrf
                            <a href="/logout" class="nav-link" onclick="event.preventDefault();this.closest('form').submit();">Sair</a>
                        </form>
                    @endauth
                </div>
            </div>
            <a href="{{route('ver_carrinho')}}" class="btn btn-sm"><i class="fa fa-shopping-cart"></i></a>
        </nav>
    </header>
    <div class="container">
        <div class="row">
            
            @yield('content')
        </div>
    </div>
</body>
</html>