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
        Schema::create('nmttonkho', function (Blueprint $table) {
            //$table->id();
            $table->date('Namthang', 6)->primary();
            $table->char('nmtMaVtu', 4)->primary();
            $table->integer('SLdau', 11);
            $table->integer('Tongsln', 11);
            $table->integer('Tongslx', 11);
            $table->integer('slcuoi', 11);
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nmttonkho');
    }
};
