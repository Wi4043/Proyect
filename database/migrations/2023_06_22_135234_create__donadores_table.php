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
        Schema::create('donadores', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ID_colaboradores');
            $table->unsignedBigInteger('ID_proyecto');
            $table->date('Fecha');
            $table->integer('Monto');
            $table->timestamps();

            $table->foreign('ID_colaboradores')->references('id')->on('colaboradores');
            $table->foreign('ID_proyecto')->references('id')->on('beneficiarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donadores');
    }
};
