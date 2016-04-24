<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Denuncia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()

    {
            Schema::create('denuncia', function (Blueprint $table) {
            $table->increments('idDenuncia');
            $table->string('nome');
            $table->string('contacto')
            $table->text('denuncia');
            $table->rememberToken();
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
        Schema::drop('denuncia');
    }
}
