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
        Schema::create('documentos', function (Blueprint $table) {
            $table->id('id_Documentacao');
            $table->string('convenio_doc');
            $table->string('relatorio_estagio_semestral_doc');
            $table->string('termo_estagio_doc');
            $table->string('termo_rescisao_doc');
            $table->string('termo_aditivo_doc');
            $table->string('termo_cancelamento_doc');
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
        Schema::dropIfExists('documento');
    }
};
