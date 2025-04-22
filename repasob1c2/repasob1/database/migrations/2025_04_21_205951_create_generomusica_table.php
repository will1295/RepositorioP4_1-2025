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
        Schema::create('generomusica', function (Blueprint $table) {
            $table->id();
            $table->integer('idgenero');
            $table->integer('idcancion');
            $table->timestamps();

            $table->foreign('idgenero')->references('id')->on('tblgeneros');
            $table->foreign('idcancion')->references('id')->on('tblcanciones');
            $table->unique(['idgenero','idcancion']);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('generomusica');
    }
};
