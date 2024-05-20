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
        Schema::create('Quiz',function (Blueprint $table){
            $table->increments('idQuiz');
            $table->string('titulo', 30);
           
            $table->unsignedInteger('idTema');
            $table->timestamps();

            $table->foreign('idTema')->references('idTema')->on('Tema')->onDelete('cascade');
       
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
