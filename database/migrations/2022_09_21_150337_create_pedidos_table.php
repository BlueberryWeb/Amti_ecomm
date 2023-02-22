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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('estatus');
            $table->string('factura');

            //Datos de personales
            $table->integer('id_prospecto')->unsigned();
            $table->string('direccion')->nullable();
            $table->string('pais')->nullable();
            $table->string('sexo')->nullable();
            $table->string('estatura')->nullable();
            $table->string('tipo_medida')->nullable();
            $table->string('color_ojos')->nullable();
            $table->string('color_cabello')->nullable();

            //Datos de envio
            $table->integer('id_envio')->unsigned();
            $table->string('nombre')->nullable();
            $table->string('telefono')->nullable();
            $table->string('correo')->nullable();
            $table->string('calle')->nullable();
            $table->string('ciudad')->nullable();
            $table->string('cp')->nullable();
            $table->string('sucursal_entrega')->nullable();
            $table->string('instrucciones')->nullable();

            //Archivos
            $table->string('frente_ine');
            $table->string('vuelta_ine');
            $table->string('frente_licencia');
            $table->string('vuelta_licencia');
            $table->string('personal_frente');  
            $table->string('fotografia_firma');  

            //Datos de pago
            $table->integer('id_producto')->unsigned();
            $table->string('description'); //Sugerencia: Borrar (productos ya cuenta con esta información).
            $table->string('tarjeta');
            $table->string('tarjeta_name');
            $table->string('pago'); //Sugerencia: Borrar (productos ya cuenta con esta información).
            $table->double('total');

            //Datos Facturación
            $table->integer('id_factura')->unsigned();

            $table->timestamps();

            //Llaves foraneas
            $table->foreign('id_prospecto')->references('id')->on('prospectos');
            $table->foreign('id_envio')->references('id')->on('envios');
            $table->foreign('id_producto')->references('id')->on('productos');
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
};
