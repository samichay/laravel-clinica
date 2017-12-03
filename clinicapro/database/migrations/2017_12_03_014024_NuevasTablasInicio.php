<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NuevasTablasInicio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('informacion', function (Blueprint $table) {
            $table->string('ubicacion',250)->index();
            $table->time('horario_ingreso');
            $table->time('horario_salida');
            $table->string('telefono',15);
        });

         Schema::create('noticias', function (Blueprint $table) {
            $table->increments('id_noticias')->index();
            $table->string('titulo',250);
            $table->mediumText('contenido');  
            $table->dateTime('fecha'); 
        });
    

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('informacion');
        Schema::drop('noticias');
    }
}
