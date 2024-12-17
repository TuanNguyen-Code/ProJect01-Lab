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
        Schema::create('nmtnhacc', function (Blueprint $table) {
            //$table->id();
            $table->char(column:'nmtManhacc', length: 3)->primary();
            $table->string(column:'nmtTennhacc', length: 100)->unique();
            $table->string(column:'nmtDiachi', length: 200);
            $table->string(column:'nmtDienthoai', length: 20);
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nmtnhacc');
    }
};
