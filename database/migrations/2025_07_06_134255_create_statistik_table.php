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
      Schema::create('statistik', function (Blueprint $table) {
    $table->id();
    $table->integer('jumlah_warga')->nullable();
$table->integer('perempuan')->nullable();
$table->integer('laki_laki')->nullable();
$table->integer('keluarga')->nullable();
$table->integer('lansia')->nullable();

    $table->timestamps();
});



    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('statistik');
    }
};
