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
        Schema::create('beneficiarios', function (Blueprint $table) {
            $table->id();
            $table->string('Empres_ORG', 100);
            $table->string('RUC', 11);
            $table->string('Descripcion_proyecto', 200);
            $table->integer('Meta');
            $table->date('Fecha_inicio');
            $table->date('Fecha_final');
            $table->integer('Recaudacion');
            $table->integer('ID_evento');
            $table->string('Descripcion_evento', 200);
            $table->integer('Cantidad_vol');
            $table->date('Fecha_actividad');
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
        Schema::dropIfExists('beneficiarios');
    }
};
