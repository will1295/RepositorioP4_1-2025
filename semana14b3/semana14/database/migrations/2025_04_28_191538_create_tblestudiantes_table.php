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
        Schema::create('tblestudiantes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->charset('utf8');
            $table->string('direccion',2);
            $table->integer('iddoc');
            $table->foreign('iddoc')->references('id')->on('tblprof')
                                    ->onDelete('cascade')->onUpdate('cascade');
            $table->string('medicina')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tblestudiantes');
    }
};
