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
        Schema::create('Preguntas',function (Blueprint $table){
            $table->increments('idPreguntas');
            $table->string('pregunta', 30);
           
            $table->unsignedInteger('idQuiz');
            $table->timestamps();

            $table->foreign('idQuiz')->references('idQuiz')->on('Quiz')->onDelete('cascade');
       
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
