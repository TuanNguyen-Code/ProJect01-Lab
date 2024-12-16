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
        Schema::create('nmtvattu', function (Blueprint $table) {
            //$table->id();
            $table->string('nmtMaVtu')->primary();
            $table->string('nmtTenVtu')->unique();
            $table->string('nmtDvTinh');
            $table->string('nmtPhanTram');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nmtvattu');
    }
};
