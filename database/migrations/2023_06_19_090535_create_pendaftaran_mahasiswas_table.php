<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pendaftaran_mahasiswa', function (Blueprint $table) {
            $table->id('id_pendaftaran');
            $table->string('nama_lengkap');
            $table->string('jenis_kelamin');
            $table->string('asal_sekolah');
            $table->string('no_telp');
            $table->string('jurusan');
            $table->integer('id_gelombang');
            $table->string('status_pendaftaran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftaran_mahasiswa');
    }
};