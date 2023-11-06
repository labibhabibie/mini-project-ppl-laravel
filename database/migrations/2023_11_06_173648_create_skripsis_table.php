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
        Schema::create('skripsis', function (Blueprint $table) {
            $table->id();
            $table->string('nim')->nullable();
            $table->string('judul')->nullable();
            $table->string('progres')->nullable();
            $table->string('stat_skripsi')->nullable();
            $table->string('tanggal_sidang')->nullable();
            $table->string('konfirmasi')->nullable()->default('0');
            $table->string('file')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skripsis');
    }
};
