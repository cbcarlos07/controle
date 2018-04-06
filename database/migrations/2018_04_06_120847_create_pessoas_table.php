<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePessoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoas', function (Blueprint $table) {
            $table->increments('cd_pessoa');
            $table->string('nm_pessoa',100);
            $table->string('telefone',10);
            $table->integer('cd_empresa')->unsigned();
            $table->integer('cd_setor')->unsigned();
            $table->string('email', 100);
            $table->integer('cd_cargo')->unsigned();
            $table->foreign( 'cd_empresa' )->references('cd_empresa')->on('empresa');
            $table->foreign( 'cd_setor' )->references('cd_setor')->on('setor');
            $table->foreign( 'cd_cargo' )->references('cd_cargo')->on('cargo');
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
        Schema::dropIfExists('pessoas');
    }
}
