<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
 // database/migrations/xxxx_xx_xx_create_beritas_table.php
public function up()
{
    Schema::create('beritas', function (Blueprint $table) {
        $table->id();
        $table->string('judul');
        $table->text('konten');
        $table->string('thumbnail')->nullable(); // gambar opsional
        $table->timestamps();
    });
}



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beritas');
    }
};
