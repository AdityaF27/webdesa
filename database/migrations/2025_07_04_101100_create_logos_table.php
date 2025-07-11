<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('logos', function (Blueprint $table) {
            $table->id();
            $table->string('foto'); // Menyimpan path lengkap seperti 'logos/nama_file.jpg'
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('logos');
    }
};
