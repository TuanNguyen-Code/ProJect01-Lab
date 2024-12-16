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
        Schema::create('nmtdondh', function (Blueprint $table) {
            //$table->id();
            $table->string('nmtSoDH');
            $table->string('nmtMaVtu');
            $table->string('nmtSLdat');
            //tạo khoá chính trên 2 cột Sodh và MaVtu
            $table->primary(columns: ['nmtSoDH', 'nmtMaVtu']);
            //tạo khoá ngoại trên cột nmtMaVtu
            $table->unique(['nmtSoDH'])->references('nmtSoDH')->on('nmtdondh');
            $table->unique(['nmtMaVtu'])->references('nmtMaVtu')->on('nmtvattu');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nmtdondh');
    }
};
