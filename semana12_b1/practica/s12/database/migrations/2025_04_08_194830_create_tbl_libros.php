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
        Schema::create('tbl_libros', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->integer("id_autor");
            $table->foreign("id_autor")
                    ->references("id")
                    ->on("tbl_autores")
                    ->onDelelte("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_libros');
    }
};
