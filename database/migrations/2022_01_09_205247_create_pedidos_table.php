<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->increments("id");
            $table->decimal("valor_total",10,2);
            $table->datetime("data_checkIn");
            $table->datetime("data_checkOut");
            $table->string("status",4);
            $table->integer("usuario_id")->unsigned();
            $table->timestamps();
            $table->foreign("usuario_id")->references("id")->on("usuarios")->onDelete("cascade");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
}