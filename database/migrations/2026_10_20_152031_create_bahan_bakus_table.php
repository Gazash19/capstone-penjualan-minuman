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
    Schema::create('bahan_baku', function (Blueprint $table) {
        $table->id(); // BIGINT unsigned PK auto-inc
        $table->string('nama_bahan'); // VARCHAR(255)
        $table->integer('stok')->default(0); // INT
        $table->string('satuan'); // misal: gram, ml, pcs
        $table->timestamps(); // created_at, updated_at[cite: 5]
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bahan_bakus');
    }
};
