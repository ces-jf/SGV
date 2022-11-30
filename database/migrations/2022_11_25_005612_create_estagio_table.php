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
        Schema::create('estagios', function (Blueprint $table) {
            $table->id('id_estagio');
            $table->foreignId('fk_aluno_id');
            $table->foreignId('fk_documentacao');
            $table->foreignId('fk_vaga_id');
            $table->foreignId('fk_convenio_id');
            $table->date('data_inicio_estagio');
            $table->date('data_fim_estagio');
            $table->boolean('aproveitamento_profissional');
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
        Schema::dropIfExists('estagio');
    }
};
