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
        Schema::create('tbllibros', function (Blueprint $table) {
            $table->id();
            $table->string("titulo");
            $table->integer("autor_id");
            $table->foreign("autor_id")
                    ->references("id")
                    ->on("tblautor")
                    ->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbllibros');
    }
};
