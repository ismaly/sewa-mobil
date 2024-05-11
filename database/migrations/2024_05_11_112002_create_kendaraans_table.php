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
        Schema::create('kendaraans', function (Blueprint $table) {
            $table->id();
            $table->string('merk');
            $table->string('model');
            $table->string('plat')->unique();
            $table->date('pinjam')->nullable(); // Menentukan kolom 'pinjam' dapat bernilai null
            $table->date('pengembalian')->nullable(); // Menentukan kolom 'pengembalian' dapat bernilai null
            $table->decimal('tarif', 10, 2);
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kendaraans');
    }
};
