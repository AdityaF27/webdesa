<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
{
    Schema::create('kontaks', function (Blueprint $table) {
        $table->id();
        $table->string('isi');
        $table->string('alamat');
        $table->string('email');
        $table->string('telepon');
        $table->string('facebook')->nullable();
        $table->string('instagram')->nullable();
        $table->string('whatsapp')->nullable();
        $table->timestamps();
    });
}

};
