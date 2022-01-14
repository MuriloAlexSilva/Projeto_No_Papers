<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório Financeiro</title>
</head>
<body>

        <div>
            <h2>Minhas Compras</h2>
        </div>
        <div>
            <table class="table table-bordered d-flex">
                <tr>
                    <th>Nome do Carro</th>
                    <th>Pedido</th>
                    <th>Valor do Item</th>
                </tr>
                @foreach($pedidos as $ped)
                    <tr>
                        <td>{{$ped->carro_id}}</td>
                        <td>{{$ped->pedido_id}}</td>
                        <td>{{$ped->valor_total}}</td>
                    </tr>

                @endforeach
            </table>
        </div>
</body>
</html>