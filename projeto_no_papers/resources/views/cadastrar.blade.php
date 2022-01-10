@extends("layouts/main")

@section('content') 

 
        <div class="col-12">
            <h2 class="mb-3">Cadastre-se</h2>
        </div>
        <form action="" method="post">
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        Nome Completo: <input type="text" name="nome" class="form-control">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        Telefone: <input type="text" name="telefone" class="form-control">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        E-mail: <input type="email" name="email" class="form-control">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        Cpf: <input type="text" name="cpf" class="form-control">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        Data de Nascimento: <input type="date" name="data_nascimento" class="form-control">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        Login: <input type="text" name="login" class="form-control">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        Senha: <input type="password" name="password" class="form-control">
                    </div>
                </div>
                <input type="submit" class="btn btn-success btn-sm" value="Cadastrar">
            </div>
        </form>


@endsection