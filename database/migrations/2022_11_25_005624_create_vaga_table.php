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
        Schema::create('vagas', function (Blueprint $table) {
            $table->id('id_vaga');
            $table->foreignId('fk_concedente_id');
            $table->string('descricao');
            $table->string('turno_horario');
            $table->string('requisitos_obrigatorio');
            $table->string('valor_bolsa');
            $table->string('beneficios');
            $table->integer('periodo_requerido');
            $table->string('curso_abrangidos');
            $table->date('data_inicio');
            $table->date('data_fim');
            $table->string('forma_de_cadastro');
            $table->boolean('disponibilidade_vaga');
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
        Schema::dropIfExists('vaga');
    }
};
