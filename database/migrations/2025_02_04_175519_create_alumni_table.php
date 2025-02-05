<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('alumni', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->string('no_alumni')->unique();
            $table->string('nama_lengkap');
            $table->decimal('ipk', 3, 2);
            $table->string('stambuk');
            $table->year('tahun_lulus');
            $table->string('fakultas');
            $table->string('prodi');
            $table->string('kerja_dimana')->nullable();
            $table->string('sebagai_apa')->nullable();
            $table->integer('durasi_dapat_kerja')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('alumni');
    }
};
