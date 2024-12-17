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
        Schema::create('nmtctpnhap', function (Blueprint $table) {
            //$table->id();
            //$table->timestamps();
            $table->string('nmtSopn')->primary();
            $table->string('nmtMaVtu');
            $table->integer('nmtSlnhap');
            $table->float('nmtDgnhap');
            //khoá chính
            $table->primary(columns: ['nmtSopn', 'nmtMaVtu']);
            //tạo khoá ngoại trên cột nmtMaVtu
            $table->unique(['nmtSopn'])->references('nmtSopn')->on('nmtctpnhap');
            $table->unique(['nmtMaVtu'])->references('nmtMaVtu')->on('nmtvattu');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nmtctpnhap');
    }
};
