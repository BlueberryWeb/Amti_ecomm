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
        Schema::create('facturacion', function (Blueprint $table) {
            $table->id();
            $table->integer('id_pedido');
            $table->integer('id_prospecto');
            $table->string("razon_social");
            $table->string("rfc");
            $table->string("calle");
            $table->string("colonia");
            $table->string("numExterior");
            $table->string("numInterior");
            $table->string("cp");
            $table->string("ciudad");
            $table->string("estado");
            $table->string("pais");
            $table->string("correo_electronico");
            $table->string("telefono");
            $table->string("cfdi");
            $table->string("regimen_fiscal");
            $table->string("constancia_fiscal");
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
        Schema::dropIfExists('facturacion');
    }
};
