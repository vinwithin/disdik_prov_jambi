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
        Schema::create('produk_hukum', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('nomor')->nullable();
            $table->string('slug')->unique();
            $table->string('tentang')->nullable();
            $table->text('dokumen');
            $table->text('path');
            $table->date('terbit');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
