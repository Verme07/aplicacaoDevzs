<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Formulario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('formulario', function (Blueprint $table) {
            $table->increments('idFormulario');
            $table->string('nome');
            $table->string('provincia');
            $table->string('bairro');
            $table->string('doencas');
            $table->string('atendimento');
            $table->string('prioridade');
            $table->string('tempoEspera');
            $table->string('suborno');
            $table->string('utilidade');
            $table->text('sugestao');
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
          Schema::drop('formulario');

        //
    }
}
