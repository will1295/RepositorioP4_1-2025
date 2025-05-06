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
        Schema::create('producto_etiquetas', function (Blueprint $table) {
            $table->id();
            $table->integer("idproducto");
            $table->integer("idcategoria");
            $table->foreign("idproducto")->references("id")->on("productos");
            $table->foreign("idcategoria")->references("id")->on("categorias");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('producto_etiquetas');
    }
};
