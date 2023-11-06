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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            // $table->string('name');
            $table->string('email')->nullable();
            $table->string('nim_nip')->default('');

            // $table->string('nim')->unique()->nullable();
            $table->string('password');
            $table->string('role')->default('mahasiswa');
            // $table->string('status')->default('aktif');
            // $table->string('angkatan')->nullable();
            // $table->string('alamat')->nullable();
            // $table->string('kota')->nullable();
            // $table->string('provinsi')->nullable();
            // $table->string('jalur_masuk')->nullable();
            // $table->string('handphone')->nullable();
            // $table->string('foto')->nullable();
            $table->rememberToken();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
