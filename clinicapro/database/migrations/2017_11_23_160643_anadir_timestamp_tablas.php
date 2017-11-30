<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AnadirTimestampTablas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('usuario', function (Blueprint $table) {
            $table->timestamps();
            $table->rememberToken();
            $table->renameColumn('contraseña','password');

        });
       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('usuario', function (Blueprint $table){
           $table->dropColumn('created_at');
           $table->dropColumn('updated_at');
           $table->dropColumn('remember_token');
           $table->renameColumn('password','contraseña');

        });

        


    }
}
