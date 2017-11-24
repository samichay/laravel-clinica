<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CambiarColumnaUsuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         DB::update('ALTER TABLE usuario MODIFY password VARCHAR(64)');    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          DB::query('alter table usuario modify password varchar(15)');

    }
}
