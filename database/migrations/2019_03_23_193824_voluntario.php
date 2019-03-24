<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Voluntario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voluntario', function (Blueprint $table) {
            $table->increments('idvoluntario');
            $table->string('nome_pessoal');
            $table->string('nome_palhaco');
            $table->string('telefone');
            $table->string('preferencia_dia_semana');
            $table->text('observacoes');
            $table->text('habilidades');
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
        Schema::drop('voluntario');
    }
}
