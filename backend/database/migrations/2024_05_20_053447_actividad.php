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
        Schema::create('Actividad', function (Blueprint $table) {
            $table->increments('idActividad');
            $table->string('nombreActividad', 30);
            $table->text('descriActividad');
            $table->string('archivo');
            $table->unsignedInteger('idSubtema');
            $table->timestamps();

            $table->foreign('idSubtema')->references('idSubtema')->on('SubTema')->onDelete('cascade');
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
