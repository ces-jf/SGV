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
        Schema::create('concedentes', function (Blueprint $table) {
            $table->id('id_concedente');
            $table->foreignId('fk_pessoa_id');
            $table->foreignId('fk_endereco_id');
            $table->boolean('profissional_liberal');
            $table->string('registro_conselho');
            $table->string('celular');
            $table->string('senha');
            $table->string('email');
            $table->integer('numero_de_empregados');
            $table->string('nome_representante');
            $table->string('email_pessoal');
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
        Schema::dropIfExists('concedente');
    }
};
