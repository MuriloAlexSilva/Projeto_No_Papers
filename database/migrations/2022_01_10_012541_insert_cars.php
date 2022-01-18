<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InsertCars extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Inserindo o id 1 - como geral
        $cat = new \App\Models\Categoria(['categoria' => 'Utilitário']);
        $cat->save();
        $cat2 = new \App\Models\Categoria(['categoria' => 'Passeio']);
        $cat2->save();
        $cat3 = new \App\Models\Categoria(['categoria' => 'SUV']);
        $cat3->save();
        //Abaixo estamos inserindo um carro na tabela carros com o id 1 - Geral
        $car1 = new \App\Models\Carro(['nome' => 'Renegade','valor' => 110,'foto' => 'images/renegade.jpg','descricao' => 'SUV Compacto','categoria_id' => $cat2 -> id]);
        $car1->save();

        $car2 = new \App\Models\Carro(['nome' => 'Saveiro','valor' => 60,'foto' => 'images/saveiro.jpg','descricao' => 'Utilitário TOP','categoria_id' => $cat -> id]);
        $car2->save();

        $car3 = new \App\Models\Carro(['nome' => 'HB20','valor' => 50,'foto' => 'images/hb20.jpg','descricao' => 'Carro de Entrada Básico','categoria_id' => $cat2 -> id]);
        $car3->save();

        $car4 = new \App\Models\Carro(['nome' => 'Hillux','valor' => 150,'foto' => 'images/hillux.jpg','descricao' => 'Caminhonete ideal para todos os gostos','categoria_id' => $cat -> id]);
        $car4->save();

        $car5 = new \App\Models\Carro(['nome' => 'Compass','valor' => 150,'foto' => 'images/compass.jpg','descricao' => 'SUV com espaço interno ideal para Familia','categoria_id' => $cat3 -> id]);
        $car5->save();

        $car6 = new \App\Models\Carro(['nome' => 'Golf','valor' => 90,'foto' => 'images/golf.jpg','descricao' => 'Sport TOP para viagens','categoria_id' => $cat2 -> id]);
        $car6->save();

        $car7 = new \App\Models\Carro(['nome' => 'Corvette','valor' => 490,'foto' => 'images/corvette.jpg','descricao' => 'Sport antigo','categoria_id' => $cat2 -> id]);
        $car7->save();

        $car8 = new \App\Models\Carro(['nome' => 'Dodge Ram','valor' => 390,'foto' => 'images/dodgeram.jpg','descricao' => 'Utilitário para toda hora','categoria_id' => $cat -> id]);
        $car8->save();

        $car9 = new \App\Models\Carro(['nome' => 'Porshe','valor' => 420,'foto' => 'images/porshe.jpg','descricao' => 'Super Sport ','categoria_id' => $cat2 -> id]);
        $car9->save();

        $car10 = new \App\Models\Carro(['nome' => 'Tucson','valor' => 160,'foto' => 'images/tucson.jpg','descricao' => 'SUV de entrada','categoria_id' => $cat3 -> id]);
        $car10->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
