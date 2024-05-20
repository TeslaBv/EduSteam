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
        Schema::create('SubTema', function (Blueprint $table) {
            $table->increments('idSubtema');
            $table->string('titulo', 30);
            $table->text('descripcion');
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
