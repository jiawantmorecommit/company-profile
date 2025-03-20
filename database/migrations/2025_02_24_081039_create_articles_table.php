<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Judul artikel
            $table->string('image')->nullable(); // Nama file gambar, boleh kosong
            $table->text('description'); // Deskripsi artikel
            $table->string('author'); // Nama pembuat artikel
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('articles');
    }
};


