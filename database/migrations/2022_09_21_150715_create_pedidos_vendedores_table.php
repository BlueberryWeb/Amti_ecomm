<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos_vendedores', function (Blueprint $table) {
            $table->id();
            $table->integer('id_vendedor')->unsigned();
            $table->integer('id_pedido')->unsigned();
            $table->foreign('id_vendedor')->references('id')->on('vendedores');
            $table->foreign('id_pedido')->references('id')->on('pedidos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos_vendedores2');
    }
};
