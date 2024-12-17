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
        Schema::create('nmtctpxuat', function (Blueprint $table) {
            //$table->id();
            $table->string('nmtSopx');
            $table->string('nmtMaVtu');
            $table->integer('nmtSlxuat');
            $table->float('nmtDgxuat');
            //khoá chính
            $table->primary(columns: ['nmtSopx', 'nmtMaVtu']);
            //tạo khoá ngoại trên cột nmtMaVtu
            $table->unique(['nmtSopx'])->references('nmtSopx')->on('nmtctpxuat');
            $table->unique(['nmtMaVtu'])->references('nmtMaVtu')->on('nmtvattu');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nmtctpxuat');
    }
};
