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
        Schema::create('Curso', function (Blueprint $table){
            $table->increments('idCurso');
            $table->string('titulo',30);
            $table->string('descripcion',60);
            $table->unsignedInteger('idSteam');
            $table->timestamps();
            $table->foreign('idSteam')->references('idSteam')->on('steam')->onDelete('cascade');
            
       
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
