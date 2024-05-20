<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('Respuesta',function (Blueprint $table){
            $table->increments('idRespuesta');
            $table->string('pregunta', 30);
            $table->boolean('is_active') -> default(false);
            $table->unsignedInteger('idPreguntas');
            $table->timestamps();

            $table->foreign('idPreguntas')->references('idPreguntas')->on('Preguntas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
