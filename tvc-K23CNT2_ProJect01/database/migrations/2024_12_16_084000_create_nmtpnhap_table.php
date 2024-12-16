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
        Schema::create('nmtpnhap', function (Blueprint $table) {
            //$table->id();
            //$table->timestamps();
            $table->string('nmtSopn')->primary();
            $table->date('nmtNgaynhap');
            $table->string('nmtSoDH');
            //tạo khoá ngoại trên cột nmtMaVtu
            $table->unique(['nmtSoDH'])->references('nmtSoDH')->on('nmtdondh');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nmtpnhap');
    }
};
