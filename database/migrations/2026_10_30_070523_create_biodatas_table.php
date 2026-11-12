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
        Schema::create('Portofolio_1173', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->id();
            $table->string('nama');
            $table->string('nim', 15)->unique();
            $table->string('peran_profesi');
            $table->string('email');
            $table->string('telepon');
            $table->text('alamat');
            $table->text('tentang_saya');
            $table->string('foto')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biodatas');
    }
};
