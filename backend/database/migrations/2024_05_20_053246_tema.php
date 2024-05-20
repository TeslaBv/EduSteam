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
        Schema::create('Tema', function (Blueprint $table){
            $table->increments('idTema');
            $table->string('titulo',30);
            $table->string('descripcion',60);
            $table->unsignedInteger('idCurso');
            $table->timestamps();

            $table->foreign('idCurso')->references('idCurso')->on('curso')->onDelete('cascade');
       
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
