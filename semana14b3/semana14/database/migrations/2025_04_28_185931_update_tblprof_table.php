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
        Schema::table('tblprof', function (Blueprint $table) {
            $table->renameColumn('nombre','nombredoc');
            $table->integer('alabor')->after('nombre');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tblprof', function (Blueprint $table) {
            $table->renameColumn('nombredoc','nombre');
            $table->dropColumn('alabor');
        });
    }
};
