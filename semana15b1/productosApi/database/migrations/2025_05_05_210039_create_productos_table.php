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
        Schema::create('productos', function (Blueprint $table) {
            //nombre,descripcion,precio,stock
            $table->id();
            $table->string("nombre");
            $table->text("descripcion")->nullable();
            $table->decimal("precio");
            $table->integer("stock")->default(0);
            $table->integer("idcategoria");
            $table->foreign("idcategoria")->references("id")->on("categorias");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
