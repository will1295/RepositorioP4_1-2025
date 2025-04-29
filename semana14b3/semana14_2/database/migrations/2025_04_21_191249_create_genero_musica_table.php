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
        Schema::create('genero_musica', function (Blueprint $table) {
            $table->id();
            $table->integer("idgenero");
            $table->foreign("idgenero")->references("id")->on("tblgeneros");
            $table->integer("idcancion");
            $table->foreign("idcancion")->references("id")->on("tblcanciones");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('genero_musica');
    }
};
