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
        Schema::create('tblcancionesgenero', function (Blueprint $table) {
            $table->id();
            $table->integer('fkcancion');
            $table->integer('fkgenero');
            $table->foreign('fkcancion')->references('id')->on('tblcanciones');
            $table->foreign('fkgenero')->references('id')->on('tblgeneros');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tblcancionesgenero');
    }
};
